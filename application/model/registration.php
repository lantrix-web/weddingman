<?php

//namespace application\model;
//
//use application\core\Model;
//use config\db;



class registration extends Model
{

    public function register($username, $password, $email, $city, $time, $birth, $gender)
    {

        $sql = 'INSERT INTO `users` (`username`, `email`, `password`, `date_created`, `locale`, `birth`, `role`) VALUES (:username, :email, :password, :date_created, :locale, :birth, :role)';

        $hash = $this->generateHash($password,$username);

        $result = $this->db->prepare($sql);
        $result->bindParam(':username', $username, \PDO::PARAM_STR);
        $result->bindParam(':email', $email, \PDO::PARAM_STR);
        $result->bindParam(':password', $hash, \PDO::PARAM_STR);
        $result->bindParam(':date_created', $time, \PDO::PARAM_INT);
        $result->bindParam(':locale', $city, \PDO::PARAM_STR);
        $result->bindParam(':birth', $birth, \PDO::PARAM_INT);
        $result->bindParam(':role', $gender, \PDO::PARAM_STR);


        $result->execute();

        $lastId = 'SELECT `user_id` FROM `users` WHERE `role` = \'man\' ORDER BY `user_id` DESC LIMIT 1';
        $lastMan = $this->db->prepare($lastId);
        $lastMan->execute();
        $man = $lastMan->fetch();

        $profileSql = 'INSERT INTO `mans` (`id`) VALUES ('.$man["user_id"].')';

        $newProfile = $this->db->prepare($profileSql);
        $newProfile->execute();


    }

    public function checkName($name)
    {

        if(strlen($name) >= 2)
        {
            return true;
        }
        return false;

    }
    public function checkEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        return false;
    }

    public function checkEmailExists($email)
    {

        $sql = 'SELECT `user_id` FROM `users` WHERE email = :email';

        $result = $this->db->prepare($sql);
        $result->bindParam(':email', $email, \PDO::PARAM_STR);
        $result->execute();

        if($result->fetch())
        {
            return true;
        }
        else
        {
            return false;


        }

    }

    public function checkLoginExists($username)
    {
        $sql = 'SELECT `user_id` FROM `users` WHERE username = :username';

        $result = $this->db->prepare($sql);
        $result->bindParam(':username', $username, \PDO::PARAM_STR);
        $result->execute();


        if($result->fetch())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function checkCity($city)
    {
        if(strlen($city) >= 2)
        {
            return true;
        }

        return false;
    }

    public function checkPassword($password)
    {
        if(strlen($password) >= 6)
        {
            return true;
        }

        return false;
    }

    public function generateHash($password, $name)
    {
        return $hash = sha1(crypt($password,$name));
    }

    public function checkUserData($login, $password)
    {

        $password = $this->generateHash($password, $login);

//        $sql = 'SELECT user_id, role, is_new, username FROM users WHERE username = :login AND password = :password AND `role` = \'man\'';
        $sql = 'SELECT user_id, role, is_new, username, active 
        
        FROM users WHERE username = :login AND password = :password AND `role` = \'man\'';

        $query = $this->db->prepare($sql);
        $query->bindParam(':login', $login);
        $query->bindParam(':password', $password);
        $query->execute();

        $result = $query->fetch(\PDO::FETCH_ASSOC);

//        if(!empty($result))
//        {
//            return $result;
//        }
//        else
//        {
//            return false;
//        }

        if(!empty($result))
        {

//            print_r($result);
//            die;
            if($result['active'] != 1)
            {
                return false;
            }
            elseif ($result['is_new'] == 1)
            {
                return $result;
            }
            elseif ($result['is_new'] != 1)
            {
                $new = new Profile();
                $userData = $new->getMyProfileById($result['user_id']);
                $user['user_id'] = $userData['profile']['id'];
                $user['avatar'] = $userData['avatar']['img'];
                $user['name'] = $userData['profile']['first_name'];
                $user['second_name'] = $userData['profile']['last_name'];
                $user['is_new'] = $result['is_new'];
                $user['role'] = $result['role'];
                return $user;

            }
        }


    }
    public function userAuth($user)
    {
        session_start();
        $_SESSION['user'] = $user;

    }

}

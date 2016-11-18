<?php

//use application\core\Controller;
//use application\model\Profile;

class profileController extends Controller
{
    private $errors = [];



    public function getLadyProfile($id)
    {
        $model = new Profile();

        $user = $model->getLadyInfoById($id);

        if($user === false)
        {
            header('Location:/404');
        }
        return $user;
    }

    public function showLadyProfile($id)
    {

        $data['userInfo'] = $this->getLadyProfile($id);

        $this->view->generate('profile', $data);
    }

    public function showMyProfile($id)
    {
        $data['userInfo'] = $this->getMyProfile($id);

        $this->view->generate('myprofile', $data);
    }


    //Получаем профиль текущего пользователя
    public function getMyProfile($id)
    {
        $model = new Profile();
        $user = $model->getMyProfileById($id);
        return $user;
    }
    // Получаем пол пользователя
    public function getRole($id)
    {
        $role = new Profile();
        $userRole = $role->getUserRole($id);
        if($userRole)
        {
            return $userRole;
        }
        else
        {
            header('Location:/404');
        }
    }

    //Инициализация
    public function actionIndex($id)
    {

        //Удаление фото
        if(isset($_POST['link'])) {
            $delImg = new Profile();
            $result = $delImg->delImg($_POST['link'], $_POST['id']);

            if($result)
            {
                echo 'success';
            }
            return false;
        }

        //Установка аватара
        if(isset($_POST['photo_id']))
        {

            $ava = new Profile();
            $photoId = $_POST['photo_id'];
            $setAvatar = $ava->setAvatar($_POST['user_id'], $photoId);

            if($setAvatar)
            {
                $_SESSION['user']['avatar'] = $_POST['img_src'];
                echo 'success';
            }else{
                var_dump($setAvatar);
            }

            return false;
        }



        if($userRole = $this->getRole($id))
        {
            if($_SESSION['user']['role'] == 'man')
            {


                if($userRole['role'] == 'man')
                {
                    if($id == $_SESSION['user']['user_id'])
                    {
                        $data['user'] = $this->getMyProfile($id);

                        //Обновляем сессию при каждом заходе на страницу
                        $_SESSION['user']['name'] = $data['user']['profile']['first_name'];
                        $_SESSION['user']['photo'] = $data['user']['avatar']['img'];

                        if(empty($data['user']['profile']['first_name']))
                        {
                            $this->actionEditUserProfile($id);
                        }
                        else
                        {
                            $this->showMyProfile($id);
                        }
                    }
                    elseif($id != $_SESSION['user']['user_id'])
                    {
                        header('Location:/login');
                    }
                }
                elseif($userRole['role'] == 'lady')
                {

                    $this->showLadyProfile($id);
                }
            }
            else
            {
                header('Location:/login');
            }
        }
        else
        {
            header('Location:/login');
        }




    }



    private function imageUpload()
    {

        for ($i = 0, $length = count($_FILES['image']['name']); $i < $length; $i++) {

            if ($_FILES['image']['error'][$i] != 0) {
                print_r($_FILES['image']['error']);
                print_r($_FILES['image']['size']);

                // Наполняем массив $errors - ключ это имя проблемного файла, а значение код ошибки.
                $this->errors['photo'][$_FILES['image']['name'][$i]] = $_FILES['image']['error'][$i];
                // Пропускаем итерацию:
                continue;
            }


            if ($_FILES['image']['size'][$i] > 3000000) {
                $this->errors['photo'][] = 'Слишком большой файл';
            }

            if (
            !(($_FILES['image']['type'][$i] == 'image/jpeg') || ($_FILES['image']['type'][$i] == 'image/png') || ($_FILES['image']['type'][$i] == 'image/gif') ||
                ($_FILES['image']['type'][$i] == 'image/bmp') || ($_FILES['image']['type'][$i] == 'image/jpg'))
            ) {

                $this->errors['photo'][] = 'Недопустимый формат изображения';
            }


            if (empty($this->errors['photo'])) {

                $fileName = 'images/original/' . md5(microtime()) . '__' . $_FILES['image']['name'][$i];
                move_uploaded_file($_FILES['image']['tmp_name'][$i], $fileName);


                $user_id = $_SESSION['user']['user_id'];
                $model = new Profile();
                $model->uploadPhoto($user_id, '/'.$fileName);
            } else {
                return false;
            }


        }
        return true;

    }

    //Загзрука фотографий паспорта
    private function passportUpload()
    {



        for( $i = 0, $length = count( $_FILES['passport']['name'] ); $i <= $length; $i++)
        {


            if( $_FILES['passport']['error'][$i] != 0 )
            {
                echo "<pre>";
                print_r($_FILES['passport']);
                echo "</pre>";

                echo "<br>";
                print_r($_FILES['passport']['size']);
                echo 'here_error';
                die;
                // Наполняем массив $errors - ключ это имя проблемного файла, а значение код ошибки.
                $this->errors['photo'][ $_FILES['passport']['name'][$i] ] = $_FILES['passport']['error'][$i];
                // Пропускаем итерацию:
                continue;
            }


            if($_FILES['passport']['size'][$i] > 3000000)
            {

                die('size error');
                $this->errors['photo'][] = 'Слишком большой файл';
            }


            if (
            !(($_FILES['passport']['type'][$i] == 'image/jpeg') || ($_FILES['passport']['type'][$i] == 'image/png') || ($_FILES['passport']['type'][$i] == 'image/gif') ||
                ($_FILES['passport']['type'][$i] == 'image/bmp') || ($_FILES['passport']['type'][$i] == 'image/jpg'))
            )
            {

                $this->errors['photo'][] = 'Недопустимый формат изображения';
            }

            if(empty($this->errors['photo']))
            {

                $fileName = 'images/passports/'.md5( microtime() ).'__'.$_FILES['passport']['name'][$i];

                move_uploaded_file( $_FILES['passport']['tmp_name'][$i], $fileName);


                $user_id = $_SESSION['user']['user_id'];
                $model = new Profile();
                $model->uploadPassport($user_id, '/'.$fileName);
            }
            else
            {
                return false;
            }


        }
        return true;

    }

    public function actionEditUserProfile($id)
    {
        if(($_SESSION['user']['user_id'] == $id) || $_SESSION['user']['role'] == 'admin') {

            $edit = new Profile();
            $data['userInfo'] = $edit->getMyProfileById($id);

            if (isset($_POST['edit'])) {
                $firstName = $_POST['first_name'];
                //
                $lastName = $_POST['last_name'];
                //
                $prefMinAge = $_POST['pref_min_age'];
                //
                $prefMaxAge = $_POST['pref_max_age'];
                //
                $height = $_POST['height'];
                //
                $weight = $_POST['weight'];
                //
                $hairColor = $_POST['hair_color'];
                //
                $eyeColor = $_POST['eye_color'];
                //
                $country = $_POST['country'];
                //
                $smoker = $_POST['smoker'];
                //
                $religion = $_POST['religion'];
                //
                $childrens = $_POST['childrens'];
                //
                $childrensPossibility = $_POST['children_possibility'];
                //
                $about = $_POST['about'];
                //
                $hobbie = $_POST['hobbie'];
                //
                $education = $_POST['education'];
                //
                $idealMate = $_POST['ideal_mate'];
                //
                $dreams = $_POST['dreams'];
                //
                $food = $_POST['food'];
                //
                $music = $_POST['music'];
                //
                $season = $_POST['season'];
                //

                //new
                $middleName = $_POST['middle_name'];
                //
                $street = $_POST['street'];
                //
                $city = $_POST['city'];
                //
                $zip = $_POST['zip'];
                //
                $prop_address = $_POST['prop_address'];
                //
                $prop_index = $_POST['prop_index'];
                //
                $email_optional = $_POST['email_optional'];
                //
                $email = $_POST['email'];
                //
                $skype = $_POST['skype'];
                //
                $viber = $_POST['viber'];
                //
                $faceTime = $_POST['faceTime'];
                //
                $zodiak_sign = $_POST['zodiak_sign'];
                //
                $alcohol = $_POST['alcohol'];
                //
                $maritial_status = $_POST['marital_status'];
                //
                $motto = $_POST['motto'];
                //
                $occupation = $_POST['occupation'];
                //
                $favorite_movie = $_POST['favorite_movie'];
                //
                $favorite_city = $_POST['favorite_city'];
                //
                $driver_licence = $_POST['driver_licence'];
                //
                $about_us = $_POST['about_us'];
                //
                $video = $_POST['video'];

                //
                $social['fb'] = $_POST['fb'];
                $social['inst'] = $_POST['inst'];

                //
                $phone = $_POST['phone'];

                //
                $childGender = $_POST['child_gender'];
                $childAge = $_POST['child_age'];

                //
                $day = $_POST['day'];
                $month = $_POST['month'];
                $year = $_POST['year'];
                $birth = strtotime($year.'-'.$month.'-'.$day);
                //


                //Установка проверки заполнения необходимых полей
                if(empty($firstName || $lastName || $country || $smoker || $about))
                {
                    $data['errors'] = 'Нужно заполнить все необходимые поля!';
                }


                if(empty($data['errors']))
                {
                    $edit->updateProfile($id,
                        $firstName,
                        $lastName,
                        $prefMinAge,
                        $prefMaxAge,
                        $height,
                        $weight,
                        $hairColor,
                        $eyeColor,
                        $country,
                        $smoker,
                        $religion,
                        $childrensPossibility,
                        $about,
                        $hobbie,
                        $education,
                        $idealMate,
                        $dreams,
                        $food,
                        $music,
                        $season,
                        $middleName,
                        $street,
                        $zip,
                        $prop_address,
                        $prop_index,
                        $email_optional,
                        $skype,
                        $viber,
                        $faceTime,
                        $zodiak_sign,
                        $alcohol,
                        $maritial_status,
                        $motto,
                        $occupation,
                        $favorite_movie,
                        $favorite_city,
                        $driver_licence,
                        $about_us,
                        $video
                    );

                    //ladies ctrl+v
                    if(!empty($social))
                    {
                        $edit->setSocial($id, $social);

                    }
                    if(!empty($phone))
                    {
                        $edit->setPhone($id,$phone);
                    }

                    $edit->setUserParams($id, $birth, $city, $email);

                    if(!empty($childAge)&&!empty($childGender))
                    {

                        $edit->delChildrens($id);
                        $childrens = [];
                        foreach ($childAge as $key => $value)
                        {
                            foreach ($childGender as $g_key => $g_value)
                            {
                                if($key == $g_key)
                                {
                                    $childrens[$g_key][] = $value;
                                    $childrens[$g_key][] = $g_value;
                                }
                            }
                        }
                        foreach ($childrens as $value)
                        {
                            $edit->setChildrens($id, $value[1], $value[0]);
                        }

                    }

                    if(!empty($_FILES['image']['name'][0]))
                    {


                        if(!$this->imageUpload())
                        {
                            $data['errors'] = $this->errors['photo'];
                        }
                    }
                    if(!empty($_FILES['passport']['name'][0]))
                    {

                        if(!$this->passportUpload())
                        {
                            $data['errors'] = $this->errors['photo'];
                        }

                    }

                    $_SESSION['user']['name'] = $data['userInfo']['profile']['first_name'];
                    $_SESSION['user']['photo'] = $data['userInfo']['avatar']['img'];
                    header('Location:/profile/'.$id);

                    //ladies ctrl+v
                }





            }


            $this->view->generate('edit', $data);
        }
        else
        {
            header('Location:/login');
        }
    }

}
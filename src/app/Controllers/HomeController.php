<?php


class HomeController
{
    use Validator;
    public function home()
    {
        echo 'Раді Вас бачити на сайті';
        require_once APP_DIR . 'views/home.php';

    }

    public function sumTwoNumbers()
    {
        $this->validate($_POST, [
            'number1' => [ 'moreThanZeroRule'],
            'number2' => [ 'moreThanZeroRule'],
        ]);

        if ($this->errors) {
            Session::set('validation_errors', $this->errors);
            Response::redirect(Request::referer());
        }
        {   if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $sum = $number1 + $number2;
            echo $sum;
        }
    }
}}



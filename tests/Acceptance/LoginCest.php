<?php


namespace Tests\Acceptance;

use Tests\Support\Page\Acceptance\LoginPage;
use Tests\Support\Step\Acceptance\LoginStep;

class LoginCest
{
    public function show_home_page_when_data_login_successfully(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('congthanh592@gmail.com', 'Congth@nh592');
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Thanh');
    }

    public function show_error_message_when_data_login_blank(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('', '');
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Log in');
    }

    public function show_error_message_when_data_email_blank(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('', 'Congth@nh592');
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Log in');
    }

    public function show_error_message_when_data_email_error(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('admingmail.com', 'Congth@nh592');
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Log in');
    }

    public function show_error_message_when_data_password_blank(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('congthanh592@gmail.com', '');
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Log in');
    }

    public function show_error_message_when_data_password_error(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('congthanh592@gmail.com', '00000000');
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Log in');
    }

    public function show_find_your_account_when_click_forgot_password(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginPage->clickForgotPassword();
        $loginStep->retrySee('Find your account');
    }
}

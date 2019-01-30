class UserMailer < ApplicationMailer
  default from: 'martionlee@gmail.com'

  def welcome_email(user)
    @user = user
    @url  = 'https://sccc.kr/login'
    mail(to: @user.email, subject: 'Welcome to SCCC Homepage')
  end
end

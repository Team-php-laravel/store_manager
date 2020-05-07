## INSTALLATION for PRODUCTION

- Clone project and cd to project directory
- Run `cp .env.example .env`
- Config database connection in file `.env`
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed`
- Run `php artisan serve`

## Lệnh cmd git bash(thực hiện theo thứ tự)
### 1.Khi chưa clone project
- Clone project: `git clone <link>`
- Create branch: `git checkout -b <branch>`
### 2.Khi thực hiện code và commit lên project git
- Add folder/file: `git add *`
- Commit git: `git commit -m "<Comment>"`
- Clone master: `git pull origin master`
- update branch: `git push origin <branch>`
-> Mỗi lần commit đều thực hiện các lệnh ở mục 2 này 

### Access
Api/Web: localhost:8000  
phpMyAdmin: mysql
EX:
- DB: name `store_manager` / user `root` password `123456`
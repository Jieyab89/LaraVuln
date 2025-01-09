# LaraVuln

This project was developed by Jieyab and the community, the purpose of this project is to create labs for web security, but it focuses on using Laravel and PHP, you can use this project to learn or modify without any credit, you can use pentest techniques such as using scanners, injection, business logic as well as several test scenarios such as black box, gray box and white box, some have missconfig in the source code and exposed information through Git and other things.

# Snapshoot 

![image](https://github.com/user-attachments/assets/f40a7151-c76a-49d7-be8d-2aca8c4482fc)
![image](https://github.com/user-attachments/assets/6776944f-4141-497f-ba16-7f16a3b894eb)

# Requirements and Preparation

1. Laragon or other web server. Recommendation use Apache or Nginx 
2. Mysql 
3. Php version 7.3 
4. Composer 
5. Code editor 

# Installation

1. Clone this repository 

SSH
```
git@github.com:Jieyab89/OSINT-Cheat-sheet.git
```

HTTPS
```
https://github.com/Jieyab89/OSINT-Cheat-sheet.git
```

2. After that run this command 

On the project folder run this 
```
composer install && update
```

Linux 
```
cp .env.example .env
```

Windows
```
copy .env.example .env
```

```
php artisan key:generate
```

3. Edit your .env to configure database and other 

> DB_CONNECTION=mysql
> 
> DB_HOST=127.0.0.1
> 
> DB_PORT=3306
> 
> DB_DATABASE=your database
> 
> DB_USERNAME=your username
> 
> DB_PASSWORD=your password
> 

4. And then dont forget to migrate database 

```
php artisan migrate
```

run db seeder for dummy data
```
php artisan db:seed
```

run your application 

```
php artisan serve
```

If any error please let me know 

# Scenario Attack Simulation 

## Initial Access

Enum port or dir on host or IP -> find mysql port -> crack hash 

Idor -> leak username and email for login-> brute force the password  

## Foothold 

There is an file upload  for rabbit hole 

RCE command injection or other -> reverse shell 

Missconfig -> CVE or from debugger -> reverse shell 

SQL Injection -> upload shell into outfile -> revershe shell 

git history -> get information -> reverse shell 

## Privilage Escalation  

XSS stored -> steal cookie -> admin -> injection -> reverse shell 

Weak auth -> login into admin -> injection -> reverse shell 

IDOR -> change account data admin -> injection -> reverse shell 

*If you want make more about privilage escalation you need the settup machine 

There is much tecnique for privilage escalation into host or machine for example SUID, human error, software CVE, missconfig, credential stuffing and other  

Tadaaaaa, vuln pwned 

## This Integrated with AD?

Maybee not, because the AD (Active Directory) setup is quite an effort, but I have set up myself on my laptop, there is a domain controller and client. If this repository is busy and growing maybe I will make it more like a box

Or you can go it self, to set up some running services, the operating system being used, as well as access to get the domain controller or root, maybe I can add in a new sub folder 

# Docker Script and Other Preq Script 

In this possible case I will add some scripts to simplify the maintenance and safety of your machine. And some exploits require bot scripts like XSS for example. I will probably add this here, please be patient

# Reset Application 

Make sure your in folder application 

run 
```
php reset_database.php
```
# Update the Application 

1. You can run this command 

```
git fetch 
```

then 

```
git pull 
```

After that check the update. Does it match the commit? If it matches then the update is complete and you have the latest version.

# Troubleshoot with Laragon 

There are several options to run Laravel, you can use artisan, or directly by excute index.php. If you want to run without artisan here is the easiest way 

1. Seeting the Laragon Apache web server config 

Apache.conf  

Emable mod_rewrite.so
```
LoadModule rewrite_module modules/mod_rewrite.so 
```

2. Change the document root with your project name 

![image](https://github.com/user-attachments/assets/f5cc137b-a4f2-447e-a767-96800f211510)

3. Then save, after that restart the Laragon 

4. Access it on web browser 

![image](https://github.com/user-attachments/assets/c1f8656b-4f68-4f97-b5d3-50c285b3f4d2)

5. Change ip to domain 

Linux 
```
sudo mousepad /etc/hosts 
```

Add like below

Example 
```
<IP>  laravuln.local
```

Open this file using notepad 

Windows
```
c:/windows/system32/drives/etc/hosts
```

Add like below

Example 
```
<IP>  laravuln.local
```

Then save it 

Here example image 

Linux 

![image](https://github.com/user-attachments/assets/155ff40a-6973-4682-b13d-40f07339bab2)

Windows 

![image](https://github.com/user-attachments/assets/fd6b53f6-58de-4a5d-8e99-046c13c7c6ec)

# Other 

If my code is bad and there are some mistakes, feel free to be corrected. As in the repository everything, thank you for your corrections and contributions

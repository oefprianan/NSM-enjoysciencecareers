## Contribute Laravel Windows And MacOS

     1. run terminal -> composer update
     2. run terminal -> composer install
     3. Edit file    ->'.env.example' to '.env'
     4. run terminal -> php artisan key:generate
     5. run terminal -> php artisan serve
    
## Install Laravel For MacOS 
- ref. https://www.dbestech.com/tutorials/how-to-install-laravel-on-mac-os

```
    - Check PHP version 
        Run terminal -> PHP -v 
    - Check Composer version 
        Run terminal -> Composer -v 
```

- Install 'PHP And Composer' Using libary Homebrew 
  
    1.Installing Homebrew
        Run in terminal

        /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"


    Check Homebrew runs successfully. libary 
                
        brew help
                
    2.Installing PHP Run in terminal

        brew install php
                 
    Check PHP runs successfully.

        PHP -v
    
    3.Installing Composer Run in terminal

        brew install composer
           
    Check Composer runs successfully. 
        
        composer --version
     
- Install Laravel with Composer 
  
  1.Run in terminal 

        composer create-project laravel/laravel project-name
        
  path to directory project-name
        
        cd project-name
  
  
  2.Run terminal

        php artisan key:generate
        
  3.Run terminal

        php artisan serve
    
## config Laravel

    php artisan key:generate
    php artisan view:clear
    php artisan config:cache
    php artisan config:clear
    php artisan route:cache
    php artisan route:clear
      
      
https://medium.com/mycostech/%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87-homebrew-%E0%B8%9A%E0%B8%99-macbook-m1-%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%8A%E0%B8%B2%E0%B8%A7-dev-%E0%B8%81%E0%B8%B1%E0%B8%99-%E0%B8%89%E0%B8%9A%E0%B8%B1%E0%B8%9A%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88-%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87-node-js-%E0%B8%94%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%A2-d33a7444eb53
      

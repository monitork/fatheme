# FATheme
Codeigniter 4 Basic Theme
```
codeigniter/
├── application/
├── composer.json
├── composer.lock
├── public/
|   ├── themes/
|   |     └── Default
|   |         └── views  
|   |             ├── partial 
|   |             └── layouts  
│   ├── .htaccess
│   └── index.php
└── vendor/
    └── codeigniter/
        └── framework/
            └── system/
````
I custom view helper of codeigniter 4 framework to config the theme with [Code Modules](https://bcit-ci.github.io/CodeIgniter4/general/modules.html?highlight=core%20module)
SEE THE IMAGE ==> Layout of Theme
![Alt text](/screenshot.png?raw=true "Layout")
1. Install:
```
composer require honeydt/fatheme
```
2. Go application -> Config -> Autoload.php 
```
$psr4 = ['Theme' =>FCPATH.'themes']
```


var CACHE_NAME = 'login-cache-v1';
var urlsToCache = [
    '/',
    '/Php/index.php',
    '/Php/Assents/Js/login.js',
     '/Php/home.php',
     '/Php/login.php',
     '/Php/logout.php',
     '/Php/db_connect.php'
];

self.addEventListener('install', function(event) {
    // Perform install steps
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(function(cache) {
                console.log('Instalação completa');
                return cache.addAll(urlsToCache);
            })
    );
});

self.addEventListener('activate', function(event) {

    var cacheWhitelist = ['pages-cache-v1', 'blog-posts-cache-v1'];

    event.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cacheName) {
                    if (cacheWhitelist.indexOf(cacheName) === -1) {
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
});
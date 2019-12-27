var CACHE_NAME = 'login-cache-v1';
var urlsToCache = [
    '/',
    '/php/index.php',
    '/php/assets/js/login.js',
     '/php/home.php',
     '/php/login.php',
     '/php/logout.php',
     '/php/db_connect.php'
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

    var cacheWhitelist = ['login-cache-v1'];

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
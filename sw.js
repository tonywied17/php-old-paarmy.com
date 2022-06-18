caches.delete(`paarmycache`);
caches.delete(`worsourcecache`);
caches.delete(`pwa-example`);
caches.delete(`v2`);
caches.delete(`paarmyV3`);
caches.delete(`paarmyV5`);
caches.delete(`paarmyV6`);
caches.delete(`paarmyV10`);
caches.delete(`paarmyV13`);
caches.delete(`paarmyV14`);
caches.delete(`paarmyV15`);
caches.delete(`paarmyV17`);
caches.delete(`paarmyV18`);
caches.delete(`paarmyV19`);
caches.delete(`paarmyV20`);
caches.delete(`paarmyV21`);
caches.delete(`paarmyV22`);
caches.delete(`paarmyV23`);
caches.delete(`paarmyV25`);
caches.delete(`paarmyV26`);


self.addEventListener('install', function(e) {
    e.waitUntil(
        caches.open('paarmyV27').then(function(cache) {
            return cache.addAll([
                '/',
                'https://kit.fontawesome.com/74de4910c5.js',
                'assets/jquery-3.6.0.min.js',
                'lib/style.css?27',
                'lib/script.js?27',
                'index.php?content=main',
                'index.php?content=schedule',
                'index.php?content=orders',
                'index.php?content=events',
                'index.php?content=gallery',
            ]);
        })
    );
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request).then(function(response) {
            return response || fetch(event.request);
        })
    );
});
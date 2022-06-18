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
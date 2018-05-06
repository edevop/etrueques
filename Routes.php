<?php

# Setting up routes
Route::set('index.php', function() {
    index::CreateView('index');
});

Route::set('aboutus', function() {
    aboutus::CreateView('aboutus');
});

Route::set('contact', function() {
    echo "contact us";
});

?>
<?php

# Setting up routes
Route::set('aboutus', function() {
    aboutus::CreateView('aboutus');
});

Route::set('contact', function() {
    echo "contact us";
});

?>
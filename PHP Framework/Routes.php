<?php

Autoloader::Register();

Route::set('index.php', function() {
      Index::CreateView('Index', 'php');
});

Route::set('Films', function() {
      Movies::CreateView('movies', 'php');

});


Route::set('Page2', function() {
      TestCont::CreateView('PageEmpt', 'php');

});


Route::set('Events', function() {
      Events::CreateView('events', 'php');
});

Route::set('Location', function() {
      Maps::CreateView('Maps', 'php');
});

Route::set('MovieView', function() {
      MovieView::CreateView('MovieView', 'php');
});

Route::callback();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Navigation Bar</title>

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300'>
  <link rel="stylesheet" href="css/bucketlist_style.css">


</head>

<body>
  <div id='menu-nav'>
  <div id='navigation-bar'>
    <ul>
      <li class='menu-sub-nav current-item'><a href='/'><i class='fa fa-home'></i><span>Home</span></a></li>
      <li class='menu-sub-nav'><a href='#'><i class='fa fa-cogs'></i><span>Widgets</span></a></li>
      <li class='menu-sub-nav'><a href='#'><i class='fa fa-user'></i><span>About</span></a></li>
      <li class='menu-sub-nav'><a href='#'><i class='fa fa-book'></i><span>Contact</span></a></li>
      <li class='menu-sub-nav' id='searchbox'><a href='#'><i class='fa fa-search'></i><span>Search</span></a></li>
    </ul>
    </div>
    <div id='search-bar'>
      <form action='nothing'>
        <input type='text' name='search' id='searchfld' placeholder='Enter your query and hit enter'/>
      </form>
    </div>
  </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>

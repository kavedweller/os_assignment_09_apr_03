<?php

//require('Blog.php');



if (isset($_GET['page']))
{
    if($_GET['page'] =='home')
    {
        header('Location: /pages/home.php');
    }

    elseif($_GET['page']=='all-blog')
    {
        header("Location: /pages/all-blog.php");
    }

    elseif($_GET['page']=='details')
    {
        $id = $_GET['id'];
        header("Location: /pages/details.php?id=$id") ;
    }
    elseif($_GET['page']=='add-blog')
    {
        $id = $_GET['id'];
        header("Location: /pages/add-blog.php") ;
    }
    elseif($_GET['page']=='contact')
    {
        $id = $_GET['id'];
        header("Location: /pages/contact.php") ;
    }
}
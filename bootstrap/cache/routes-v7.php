<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o1KPW9U2w7mndiZn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/simple-route' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ixD6yDdGHJEyXZHa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/about/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.about.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/simple-route' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/adminmenulinks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.adminmenulinks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.adminmenulinks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adminmenulinks/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.adminmenulinks.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminmenulinks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminmenulinks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adminmenulinks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminmenulinks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminmenulinks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.blog.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blogcategory/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.blogcategory.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogcategory/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blogcontent/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.blogcontent.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogcontent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogcontent/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/calculator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.calculator.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.calculator.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/calculator/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.calculator.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/calculator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calculator.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'calculator.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/calculator/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calculator.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/corporative/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.corporative.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/corporative' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/corporative/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/coursefaq/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.coursefaq.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/coursefaq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/coursefaq/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.customer.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/headerdatas/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.headerdatas.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/headerdatas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/headerdatas/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lang/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.lang.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_langs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.lang.get_langs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lang.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lesson/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.lesson.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lesson/get_titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.lesson.get_titles',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lesson' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lesson.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lesson.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lesson/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lesson.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.menu.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.menu.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/menu/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.menu.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menu.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/menu/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/news/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.news.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'news.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/partners/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.partners.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'partners.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/privacy/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.privacy.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/privacy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/privacy/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/project/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.project.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'project.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/project/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/room/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.room.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/room' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'room.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'room.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/room/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'room.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/scholarshipprogram/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.scholarshipprogram.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/scholarshipprogram' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/scholarshipprogram/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/siteinfo/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.siteinfo.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contactform/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contact.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vebinar/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contact.vebinar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/workshop/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contact.workshop',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/carrier_and_schoolarship/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contact.carrier_and_schoolarship',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/google_datas/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.google_datas.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/siteinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/siteinfo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/training/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.training.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/training' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'training.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'training.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/training/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'training.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainingcategory/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.trainingcategory.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trainingcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trainingcategory/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainingsubject/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.trainingsubject.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trainingsubject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trainingsubject/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/translate/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.translate.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translate.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'translate.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translate/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translate.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/userrole' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.userrole.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.userrole.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/userrole/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.userrole.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userrole' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userrole.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'userrole.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userrole/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userrole.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vacancy/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vacancy.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/vacancy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vacancy.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'vacancy.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/vacancy/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vacancy.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vebinar/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vebinar.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/vebinar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/vebinar/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/videolessons/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.videolessons.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/videolessons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/videolessons/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/videolessonscategory/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.videolessonscategory.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/videolessonscategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/videolessonscategory/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/videolessonstitle/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.videolessonstitle.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/videolessonstitle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/videolessonstitle/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/workshop/delete_selected_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.workshop.delete_selected_items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/workshop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/workshop/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/(?|([^/]++)/get_about(*:36)|v1/admin(?|/([^/]++)(?|(*:66))|menulinks/([^/]++)(?|(*:95)))|([^/]++)/get_blog(?|/([^/]++)(*:133)|_content/([^/]++)(*:158)|c(?|ategory(*:177)|ontent/([^/]++)(*:200)))|v1/calculator/([^/]++)(?|(*:235))|([^/]++)/(?|calculator/getCalculatorDatas(*:285)|get_(?|c(?|orporative(*:314)|ustomers(*:330))|faq/([^/]++)(*:351)|headerdatas(*:370)|l(?|angs/([^/]++)(*:395)|esson/([^/]++)(*:417))))|v1/menu/([^/]++)(?|(*:447))|([^/]++)/get_menu(*:473)|news/(?|pin/([^/]++)(*:501)|unpin/([^/]++)(*:523))|([^/]++)/get_(?|news(?|(*:555)|/([^/]++)(*:572))|p(?|artners(*:592)|r(?|ivacy(*:609)|oject(?|s(*:626)|/([^/]++)(*:643))))|rooms(*:659)|s(?|cholarshipprogram(*:688)|iteinfo(*:703))|tra(?|inings(?|/([^/]++)(*:736)|ubject/([^/]++)(*:759))|nslate(*:774))|categories(*:793))|get_translate/([^/]++)(*:824)|v1/userrole/([^/]++)(?|(*:855))|([^/]++)/get_(?|v(?|acancy(*:890)|ebinar(*:904)|ideolesson(?|s(?|/([^/]++)(*:938)|category(*:954)|title/([^/]++)(*:976))|_content/([^/]++)(*:1002)))|workshop(*:1021)))|bout/(?|([^/]++)(?|/edit(*:1056)|(*:1065))|changeStatus(?|False/([^/]++)(*:1104)|True/([^/]++)(*:1126))|deleteFile/([^/]++)(*:1155)|([^/]++)(?|(*:1175)))|dmin/(?|admin(?|/([^/]++)(?|/(?|edit(*:1222)|updatePassword(*:1245))|(*:1255))|menulinks/(?|([^/]++)/(?|edit(*:1294)|update(*:1309))|changeStatus(?|False/([^/]++)(*:1348)|True/([^/]++)(*:1370))|deleteFile/([^/]++)(*:1399)))|blogcategory/(?|([^/]++)(?|/edit(*:1442)|(*:1451))|changeStatus(?|False/([^/]++)(*:1490)|True/([^/]++)(*:1512))|order_(?|up/([^/]++)(*:1542)|down/([^/]++)(*:1564)))|c(?|alculator/(?|([^/]++)(?|/edit(*:1608)|(*:1617))|add_area(*:1635)|delete/([^/]++)(*:1659))|oursefaq/(?|([^/]++)(?|/edit(*:1697)|(*:1706))|changeStatus(?|False/([^/]++)(*:1745)|True/([^/]++)(*:1767))|deleteFile/([^/]++)(*:1796))|ustomer/(?|([^/]++)(?|/edit(*:1833)|(*:1842))|changeStatus(?|False/([^/]++)(*:1881)|True/([^/]++)(*:1903))|deleteFile/([^/]++)(*:1932)|order_(?|up/([^/]++)(*:1961)|down/([^/]++)(*:1983))))|lesson/(?|([^/]++)(?|/edit(*:2021)|(*:2030))|changeStatus(?|False/([^/]++)(*:2069)|True/([^/]++)(*:2091)))|news/(?|([^/]++)(?|/edit(*:2126)|(*:2135))|changeStatus(?|False/([^/]++)(*:2174)|True/([^/]++)(*:2196))|deleteFile/([^/]++)(*:2225))|p(?|artners/(?|([^/]++)(?|/edit(*:2266)|(*:2275))|changeStatus(?|False/([^/]++)(*:2314)|True/([^/]++)(*:2336))|deleteFile/([^/]++)(*:2365))|r(?|ivacy/(?|([^/]++)(?|/edit(*:2404)|(*:2413))|changeStatus(?|False/([^/]++)(*:2452)|True/([^/]++)(*:2474))|deleteFile/([^/]++)(*:2503))|oject/(?|([^/]++)(?|/edit(*:2538)|(*:2547))|changeStatus(?|False/([^/]++)(*:2586)|True/([^/]++)(*:2608))|deleteFile/([^/]++)(*:2637)))|ermission(?|(?:/([^/]++))?(*:2674)|/(?|create(?:/([^/]++))?(*:2707)|store(?:/([^/]++))?(*:2735)|edit(?:/([^/]++)(?:/([^/]++))?)?(*:2776)|update(?:/([^/]++)(?:/([^/]++))?)?(*:2819))))|room/(?|([^/]++)(?|/edit(*:2855)|(*:2864))|changeStatus(?|False/([^/]++)(*:2903)|True/([^/]++)(*:2925))|deleteFile/([^/]++)(*:2954))|s(?|cholarshipprogram/(?|([^/]++)(?|/edit(*:3005)|(*:3014))|changeStatus(?|False/([^/]++)(*:3053)|True/([^/]++)(*:3075))|deleteFile/([^/]++)(*:3104))|iteinfo/(?|([^/]++)(?|/edit(*:3141)|(*:3150))|changeStatus(?|False/([^/]++)(*:3189)|True/([^/]++)(*:3211))|deleteFile/([^/]++)(*:3240)))|tra(?|ining(?|/(?|([^/]++)(?|/edit(*:3285)|(*:3294))|changeStatus(?|False/([^/]++)(*:3333)|True/([^/]++)(*:3355))|deleteFile/([^/]++)(*:3384))|category/(?|([^/]++)(?|/edit(*:3422)|(*:3431))|changeStatus(?|False/([^/]++)(*:3470)|True/([^/]++)(*:3492))|order_(?|up/([^/]++)(*:3522)|down/([^/]++)(*:3544)))|subject/(?|([^/]++)(?|/edit(*:3582)|(*:3591))|changeStatus(?|False/([^/]++)(*:3630)|True/([^/]++)(*:3652))|deleteFile/([^/]++)(*:3681)))|nslate/(?|([^/]++)(?|/edit(*:3718)|(*:3727))|deleteFile/([^/]++)(*:3756)))|userrole/([^/]++)(?|/edit(*:3792)|(*:3801))|v(?|acancy/(?|([^/]++)(?|/edit(*:3841)|(*:3850))|changeStatus(?|False/([^/]++)(*:3889)|True/([^/]++)(*:3911))|deleteFile/([^/]++)(*:3940))|ebinar/(?|([^/]++)(?|(*:3971)|/edit(*:3985)|(*:3994))|changeStatus(?|False/([^/]++)(*:4033)|True/([^/]++)(*:4055))|deleteFile/([^/]++)(*:4084)|([^/]++)(*:4101))|ideolessons(?|/(?|([^/]++)(?|(*:4140)|/edit(*:4154)|(*:4163))|changeStatus(?|False/([^/]++)(*:4202)|True/([^/]++)(*:4224))|deleteFile/([^/]++)(*:4253)|order_(?|up/([^/]++)(*:4282)|down/([^/]++)(*:4304))|([^/]++)(*:4322))|category/(?|([^/]++)(?|(*:4355)|/edit(*:4369)|(*:4378))|changeStatus(?|False/([^/]++)(*:4417)|True/([^/]++)(*:4439))|order_(?|up/([^/]++)(*:4469)|down/([^/]++)(*:4491))|([^/]++)(*:4509))|title/(?|([^/]++)(?|(*:4539)|/edit(*:4553)|(*:4562))|changeStatus(?|False/([^/]++)(*:4601)|True/([^/]++)(*:4623))|([^/]++)(*:4641))))|workshop/(?|([^/]++)(?|(*:4676)|/edit(*:4690)|(*:4699))|changeStatus(?|False/([^/]++)(*:4738)|True/([^/]++)(*:4760))|deleteFile/([^/]++)(*:4789)|([^/]++)(*:4806))))|/blog(?|/(?|([^/]++)(?|/edit(*:4846)|(*:4855))|changeStatus(?|False/([^/]++)(*:4894)|True/([^/]++)(*:4916))|deleteFile/([^/]++)(*:4945)|order_(?|up/([^/]++)(*:4974)|down/([^/]++)(*:4996)))|content/(?|([^/]++)(?|/edit(*:5034)|(*:5043))|changeStatus(?|False/([^/]++)(*:5082)|True/([^/]++)(*:5104))|deleteFile/([^/]++)(*:5133)))|/corporative/(?|([^/]++)(?|/edit(*:5176)|(*:5185))|changeStatus(?|False/([^/]++)(*:5224)|True/([^/]++)(*:5246))|deleteFile/([^/]++)(*:5275))|/headerdatas/(?|([^/]++)(?|/edit(*:5317)|(*:5326))|changeStatus(?|False/([^/]++)(*:5365)|True/([^/]++)(*:5387))|deleteFile/([^/]++)(*:5416)|order_(?|up/([^/]++)(*:5445)|down/([^/]++)(*:5467)))|/lang/(?|([^/]++)(?|/edit(*:5503)|(*:5512))|change(?|Default/([^/]++)(*:5547)|Status(?|False/([^/]++)(*:5579)|True/([^/]++)(*:5601)))|order_(?|up/([^/]++)(*:5632)|down/([^/]++)(*:5654)))|/menu/(?|([^/]++)(?|/edit(*:5690)|(*:5699))|changeStatus(?|False/([^/]++)(*:5738)|True/([^/]++)(*:5760))|deleteFile/([^/]++)(*:5789)))/?$}sDu',
    ),
    3 => 
    array (
      36 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.about.get_about',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      66 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.show',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.update',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      95 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.adminmenulinks.show',
          ),
          1 => 
          array (
            0 => 'adminmenulink',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.adminmenulinks.update',
          ),
          1 => 
          array (
            0 => 'adminmenulink',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'api.adminmenulinks.destroy',
          ),
          1 => 
          array (
            0 => 'adminmenulink',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.blog.get_name',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.blog.get_blog_content',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      177 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.blogcategory.get_name',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.blogcontent.get_name',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.calculator.show',
          ),
          1 => 
          array (
            0 => 'calculator',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.calculator.update',
          ),
          1 => 
          array (
            0 => 'calculator',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'api.calculator.destroy',
          ),
          1 => 
          array (
            0 => 'calculator',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.calculator.getCalculatorDatas',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.corporative.get_corporative',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.customer.get_customers',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.coursefaq.get_faq',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.get_headerdatas',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.lang.get_langs_group',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.lesson.get_lesson',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.menu.show',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.menu.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'api.menu.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.menu.get_menu',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.news.pin',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.news.unpin',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.news.get_news',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.news.get_one_news',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.partners.get_partners',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.privacy.get_privacy',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.project.get_projects',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.project.get_project',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      659 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.room.get_rooms',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.scholarshipprogram.get_scholarshipprogram',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.siteinfo.get_siteinfo',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.training.get_trainings',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      759 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.trainingsubject.get_trainingsubject',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.translate.get_translate',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.trainingcategory.get_categories',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      824 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.translate.get_translate_group',
          ),
          1 => 
          array (
            0 => 'group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.userrole.show',
          ),
          1 => 
          array (
            0 => 'userrole',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.userrole.update',
          ),
          1 => 
          array (
            0 => 'userrole',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'api.userrole.destroy',
          ),
          1 => 
          array (
            0 => 'userrole',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vacancy.get_vacancy',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vebinar.get_vebinar',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      938 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.videolessons.get_name',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.videolessonscategory.get_videolessonscategory',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.videolessonstitle.get_name',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1002 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.videolessons.get_videolesson',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1021 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.workshop.get_workshop',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1065 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.show',
          ),
          1 => 
          array (
            0 => 'about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about.destroy',
          ),
          1 => 
          array (
            0 => 'about',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.updatePassword',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.update',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminmenulinks.edit',
          ),
          1 => 
          array (
            0 => 'adminmenulink',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminmenulinks.update',
          ),
          1 => 
          array (
            0 => 'adminmenulink',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminmenulinks.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminmenulinks.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1399 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminmenulinks.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.edit',
          ),
          1 => 
          array (
            0 => 'blogcategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.update',
          ),
          1 => 
          array (
            0 => 'blogcategory',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.show',
          ),
          1 => 
          array (
            0 => 'blogcategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.destroy',
          ),
          1 => 
          array (
            0 => 'blogcategory',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1542 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.changeOrderUp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcategory.changeOrderDown',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calculator.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calculator.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calculator.add_area',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1659 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calculator.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.edit',
          ),
          1 => 
          array (
            0 => 'coursefaq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.update',
          ),
          1 => 
          array (
            0 => 'coursefaq',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.show',
          ),
          1 => 
          array (
            0 => 'coursefaq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.destroy',
          ),
          1 => 
          array (
            0 => 'coursefaq',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coursefaq.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.edit',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.update',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.show',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'customer.destroy',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1932 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.changeOrderUp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.changeOrderDown',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2021 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lesson.edit',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2030 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lesson.update',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lesson.show',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'lesson.destroy',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2069 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lesson.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lesson.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.edit',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.update',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'news.show',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'news.destroy',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.edit',
          ),
          1 => 
          array (
            0 => 'partners',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.update',
          ),
          1 => 
          array (
            0 => 'partners',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'partners.show',
          ),
          1 => 
          array (
            0 => 'partners',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'partners.destroy',
          ),
          1 => 
          array (
            0 => 'partners',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2336 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.edit',
          ),
          1 => 
          array (
            0 => 'privacy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.update',
          ),
          1 => 
          array (
            0 => 'privacy',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.show',
          ),
          1 => 
          array (
            0 => 'privacy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.destroy',
          ),
          1 => 
          array (
            0 => 'privacy',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.edit',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.update',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'project.show',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'project.destroy',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'project.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.list',
            'role_id' => NULL,
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.create',
            'role_id' => NULL,
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2735 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.store',
            'role_id' => NULL,
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.edit',
            'role_id' => NULL,
            'page_id' => NULL,
          ),
          1 => 
          array (
            0 => 'role_id',
            1 => 'page_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2819 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.update',
            'role_id' => NULL,
            'page_id' => NULL,
          ),
          1 => 
          array (
            0 => 'role_id',
            1 => 'page_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'room.edit',
          ),
          1 => 
          array (
            0 => 'room',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'room.update',
          ),
          1 => 
          array (
            0 => 'room',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'room.show',
          ),
          1 => 
          array (
            0 => 'room',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'room.destroy',
          ),
          1 => 
          array (
            0 => 'room',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'room.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2925 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'room.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'room.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.edit',
          ),
          1 => 
          array (
            0 => 'scholarshipprogram',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.update',
          ),
          1 => 
          array (
            0 => 'scholarshipprogram',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.show',
          ),
          1 => 
          array (
            0 => 'scholarshipprogram',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.destroy',
          ),
          1 => 
          array (
            0 => 'scholarshipprogram',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3053 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scholarshipprogram.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3141 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.edit',
          ),
          1 => 
          array (
            0 => 'siteinfo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.update',
          ),
          1 => 
          array (
            0 => 'siteinfo',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.show',
          ),
          1 => 
          array (
            0 => 'siteinfo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.destroy',
          ),
          1 => 
          array (
            0 => 'siteinfo',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteinfo.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'training.edit',
          ),
          1 => 
          array (
            0 => 'training',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'training.update',
          ),
          1 => 
          array (
            0 => 'training',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'training.show',
          ),
          1 => 
          array (
            0 => 'training',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'training.destroy',
          ),
          1 => 
          array (
            0 => 'training',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'training.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'training.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'training.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.edit',
          ),
          1 => 
          array (
            0 => 'trainingcategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.update',
          ),
          1 => 
          array (
            0 => 'trainingcategory',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.show',
          ),
          1 => 
          array (
            0 => 'trainingcategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.destroy',
          ),
          1 => 
          array (
            0 => 'trainingcategory',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.changeOrderUp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingcategory.changeOrderDown',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.edit',
          ),
          1 => 
          array (
            0 => 'trainingsubject',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.update',
          ),
          1 => 
          array (
            0 => 'trainingsubject',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.show',
          ),
          1 => 
          array (
            0 => 'trainingsubject',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.destroy',
          ),
          1 => 
          array (
            0 => 'trainingsubject',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trainingsubject.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3718 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translate.edit',
          ),
          1 => 
          array (
            0 => 'translate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3727 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translate.update',
          ),
          1 => 
          array (
            0 => 'translate',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'translate.show',
          ),
          1 => 
          array (
            0 => 'translate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'translate.destroy',
          ),
          1 => 
          array (
            0 => 'translate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translate.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userrole.edit',
          ),
          1 => 
          array (
            0 => 'userrole',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userrole.update',
          ),
          1 => 
          array (
            0 => 'userrole',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vacancy.edit',
          ),
          1 => 
          array (
            0 => 'vacancy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vacancy.update',
          ),
          1 => 
          array (
            0 => 'vacancy',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'vacancy.destroy',
          ),
          1 => 
          array (
            0 => 'vacancy',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vacancy.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3911 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vacancy.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vacancy.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.show',
          ),
          1 => 
          array (
            0 => 'vebinar',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3985 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.edit',
          ),
          1 => 
          array (
            0 => 'vebinar',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.update',
          ),
          1 => 
          array (
            0 => 'vebinar',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.destroy',
          ),
          1 => 
          array (
            0 => 'vebinar',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4033 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vebinar.patch',
          ),
          1 => 
          array (
            0 => 'vebinar',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.show',
          ),
          1 => 
          array (
            0 => 'videolesson',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4154 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.edit',
          ),
          1 => 
          array (
            0 => 'videolesson',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.update',
          ),
          1 => 
          array (
            0 => 'videolesson',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.destroy',
          ),
          1 => 
          array (
            0 => 'videolesson',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4253 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.changeOrderUp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.changeOrderDown',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessons.customUpdate',
          ),
          1 => 
          array (
            0 => 'videolessons',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.show',
          ),
          1 => 
          array (
            0 => 'videolessonscategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.edit',
          ),
          1 => 
          array (
            0 => 'videolessonscategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.update',
          ),
          1 => 
          array (
            0 => 'videolessonscategory',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.destroy',
          ),
          1 => 
          array (
            0 => 'videolessonscategory',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.changeOrderUp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.changeOrderDown',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonscategory.patch',
          ),
          1 => 
          array (
            0 => 'videolessonscategory',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.show',
          ),
          1 => 
          array (
            0 => 'videolessonstitle',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.edit',
          ),
          1 => 
          array (
            0 => 'videolessonstitle',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.update',
          ),
          1 => 
          array (
            0 => 'videolessonstitle',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.destroy',
          ),
          1 => 
          array (
            0 => 'videolessonstitle',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videolessonstitle.patch',
          ),
          1 => 
          array (
            0 => 'videolessonstitle',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.show',
          ),
          1 => 
          array (
            0 => 'workshop',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.edit',
          ),
          1 => 
          array (
            0 => 'workshop',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.update',
          ),
          1 => 
          array (
            0 => 'workshop',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.destroy',
          ),
          1 => 
          array (
            0 => 'workshop',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4806 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.patch',
          ),
          1 => 
          array (
            0 => 'workshop',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.edit',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.update',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blog.show',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'blog.destroy',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.changeOrderUp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.changeOrderDown',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.edit',
          ),
          1 => 
          array (
            0 => 'blogcontent',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.update',
          ),
          1 => 
          array (
            0 => 'blogcontent',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.show',
          ),
          1 => 
          array (
            0 => 'blogcontent',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.destroy',
          ),
          1 => 
          array (
            0 => 'blogcontent',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogcontent.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.edit',
          ),
          1 => 
          array (
            0 => 'corporative',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.update',
          ),
          1 => 
          array (
            0 => 'corporative',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.show',
          ),
          1 => 
          array (
            0 => 'corporative',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.destroy',
          ),
          1 => 
          array (
            0 => 'corporative',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'corporative.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.edit',
          ),
          1 => 
          array (
            0 => 'headerdata',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.update',
          ),
          1 => 
          array (
            0 => 'headerdata',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.show',
          ),
          1 => 
          array (
            0 => 'headerdata',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.destroy',
          ),
          1 => 
          array (
            0 => 'headerdata',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.changeOrderUp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerdatas.changeOrderDown',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.edit',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.update',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lang.show',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'lang.destroy',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.changeDefault',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.changeOrderUp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.changeOrderDown',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.edit',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menu.show',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'menu.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.changeStatusFalse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.changeStatusTrue',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.deleteFile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::o1KPW9U2w7mndiZn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:846:"function () {
                    $exception = null;

                    try {
                        \\Illuminate\\Support\\Facades\\Event::dispatch(new \\Illuminate\\Foundation\\Events\\DiagnosingHealth);
                    } catch (\\Throwable $e) {
                        if (app()->hasDebugModeEnabled()) {
                            throw $e;
                        }

                        report($e);

                        $exception = $e->getMessage();
                    }

                    return response(\\Illuminate\\Support\\Facades\\View::file(\'/home/innab/domains/admin.innab.coder.az/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Configuration\'.\'/../resources/health-up.blade.php\', [
                        \'exception\' => $exception,
                    ]), status: $exception ? 500 : 200);
                }";s:5:"scope";s:54:"Illuminate\\Foundation\\Configuration\\ApplicationBuilder";s:4:"this";N;s:4:"self";s:32:"000000000000138f0000000000000000";}}',
        'as' => 'generated::o1KPW9U2w7mndiZn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LogoutController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\LogoutController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ixD6yDdGHJEyXZHa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'simple-route',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:32:"function () {
    return \'OK\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000013410000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ixD6yDdGHJEyXZHa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.about.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/about/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:5,4',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@delete_selected_items',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@delete_selected_items',
        'as' => 'api.about.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.about.get_about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutApiController@get_about',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutApiController@get_about',
        'as' => 'api.about.get_about',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/simple-route',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:32:"function () {
    return \'OK\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000115d0000000000000000";}}',
        'as' => 'api.',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:5,1',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@index',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:5,2',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@create',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:5,2',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@store',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:5,3',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@edit',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'about/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:5,3',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@update',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:5,3',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@changeStatusFalse',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:5,3',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@changeStatusTrue',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:5,3',
        ),
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@deleteFile',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@deleteFile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about/{about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about.show',
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@show',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'about/{about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about.destroy',
        'uses' => 'Modules\\About\\Http\\Controllers\\AboutController@destroy',
        'controller' => 'Modules\\About\\Http\\Controllers\\AboutController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.admin.index',
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@index',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.admin.store',
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@store',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.admin.show',
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@show',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.admin.update',
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@update',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.admin.destroy',
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@destroy',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:30,4',
        ),
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@delete_selected_items',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@delete_selected_items',
        'as' => 'api.admin.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkpermission:30,1',
        ),
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@index',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@index',
        'as' => 'admin.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkpermission:30,2',
        ),
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@create',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@create',
        'as' => 'admin.admin.create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkpermission:30,2',
        ),
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@store',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@store',
        'as' => 'admin.admin.store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/{admin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkpermission:30,3',
        ),
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@edit',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@edit',
        'as' => 'admin.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkpermission:30,3',
        ),
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@update',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@update',
        'as' => 'admin.admin.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin.updatePassword' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/admin/{id}/updatePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkpermission:30,3',
        ),
        'uses' => 'Modules\\Admin\\Http\\Controllers\\AdminController@updatePassword',
        'controller' => 'Modules\\Admin\\Http\\Controllers\\AdminController@updatePassword',
        'as' => 'admin.admin.updatePassword',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.adminmenulinks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/adminmenulinks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.adminmenulinks.index',
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@index',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.adminmenulinks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/adminmenulinks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.adminmenulinks.store',
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@store',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.adminmenulinks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/adminmenulinks/{adminmenulink}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.adminmenulinks.show',
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@show',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.adminmenulinks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/adminmenulinks/{adminmenulink}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.adminmenulinks.update',
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@update',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.adminmenulinks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/adminmenulinks/{adminmenulink}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.adminmenulinks.destroy',
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@destroy',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.adminmenulinks.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/adminmenulinks/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@delete_selected_items',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@delete_selected_items',
        'as' => 'api.adminmenulinks.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminmenulinks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminmenulinks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@index',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@index',
        'as' => 'adminmenulinks.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminmenulinks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminmenulinks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@create',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@create',
        'as' => 'adminmenulinks.create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminmenulinks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adminmenulinks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@store',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@store',
        'as' => 'adminmenulinks.store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminmenulinks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminmenulinks/{adminmenulink}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@edit',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@edit',
        'as' => 'adminmenulinks.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminmenulinks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/adminmenulinks/{adminmenulink}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@update',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@update',
        'as' => 'adminmenulinks.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminmenulinks.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminmenulinks/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@changeStatusFalse',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@changeStatusFalse',
        'as' => 'adminmenulinks.changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminmenulinks.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminmenulinks/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@changeStatusTrue',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@changeStatusTrue',
        'as' => 'adminmenulinks.changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminmenulinks.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminmenulinks/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@deleteFile',
        'controller' => 'Modules\\AdminMenuLinks\\Http\\Controllers\\AdminMenuLinksController@deleteFile',
        'as' => 'adminmenulinks.deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.blog.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blog/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:16, 4',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@delete_selected_items',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@delete_selected_items',
        'as' => 'api.blog.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.blog.get_name' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_blog/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogApiController@get_blog',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogApiController@get_blog',
        'as' => 'api.blog.get_name',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.blog.get_blog_content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_blog_content/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogApiController@get_blog_content',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogApiController@get_blog_content',
        'as' => 'api.blog.get_blog_content',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,1',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@index',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,2',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@create',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,2',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@store',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{blog}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,3',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@edit',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,3',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@update',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,1',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@show',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,4',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@destroy',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,3',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@changeStatusFalse',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,3',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@changeStatusTrue',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,3',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@deleteFile',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@deleteFile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.changeOrderUp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/order_up/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,3',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@changeOrderUp',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@changeOrderUp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.changeOrderUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.changeOrderDown' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/order_down/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:16,3',
        ),
        'uses' => 'Modules\\Blog\\Http\\Controllers\\BlogController@changeOrderDown',
        'controller' => 'Modules\\Blog\\Http\\Controllers\\BlogController@changeOrderDown',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.changeOrderDown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.blogcategory.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blogcategory/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:15,4',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@delete_selected_items',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@delete_selected_items',
        'as' => 'api.blogcategory.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.blogcategory.get_name' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_blogcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryApiController@get_blogcategory',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryApiController@get_blogcategory',
        'as' => 'api.blogcategory.get_name',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,1',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@index',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogcategory/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,2',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@create',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,2',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@store',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogcategory/{blogcategory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,3',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@edit',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/blogcategory/{blogcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,3',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@update',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogcategory/{blogcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,1',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@show',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blogcategory/{blogcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,4',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@destroy',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogcategory/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,3',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@changeStatusFalse',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogcategory/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,3',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@changeStatusTrue',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.changeOrderUp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogcategory/order_up/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,3',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@changeOrderUp',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@changeOrderUp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.changeOrderUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcategory.changeOrderDown' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogcategory/order_down/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:15,3',
        ),
        'uses' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@changeOrderDown',
        'controller' => 'Modules\\BlogCategory\\Http\\Controllers\\BlogCategoryController@changeOrderDown',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogcategory.changeOrderDown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.blogcontent.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blogcontent/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:17,4',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@delete_selected_items',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@delete_selected_items',
        'as' => 'api.blogcontent.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.blogcontent.get_name' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_blogcontent/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentApiController@get_blogcontent',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentApiController@get_blogcontent',
        'as' => 'api.blogcontent.get_name',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogcontent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,1',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@index',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogcontent/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,2',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@create',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blogcontent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,2',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@store',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogcontent/{blogcontent}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,3',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@edit',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'blogcontent/{blogcontent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,3',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@update',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogcontent/{blogcontent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,1',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@show',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'blogcontent/{blogcontent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,4',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@destroy',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogcontent/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,3',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@changeStatusFalse',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogcontent/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,3',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@changeStatusTrue',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogcontent.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogcontent/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:17,3',
        ),
        'uses' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@deleteFile',
        'controller' => 'Modules\\BlogContent\\Http\\Controllers\\BlogContentController@deleteFile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogcontent.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.calculator.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.calculator.index',
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@index',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.calculator.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.calculator.store',
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@store',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.calculator.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/calculator/{calculator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.calculator.show',
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@show',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.calculator.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/calculator/{calculator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.calculator.update',
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@update',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.calculator.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/calculator/{calculator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.calculator.destroy',
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@destroy',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.calculator.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/calculator/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@delete_selected_items',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@delete_selected_items',
        'as' => 'api.calculator.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.calculator.getCalculatorDatas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/calculator/getCalculatorDatas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@getCalculatorDatas',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@getCalculatorDatas',
        'as' => 'api.calculator.getCalculatorDatas',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calculator.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:32,1',
        ),
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@index',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'calculator.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calculator.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/calculator/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:32,2',
        ),
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@create',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'calculator.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calculator.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:32,21',
        ),
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@store',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'calculator.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calculator.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/calculator/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:32,3',
        ),
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@edit',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'calculator.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calculator.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/calculator/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:32,3',
        ),
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@update',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'calculator.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calculator.add_area' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/calculator/add_area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:32,2',
        ),
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@add_area',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@add_area',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'calculator.add_area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calculator.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/calculator/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:32,2',
        ),
        'uses' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@delete',
        'controller' => 'Modules\\Calculator\\Http\\Controllers\\CalculatorController@delete',
        'namespace' => NULL,
        'prefix' => 'admin/calculator',
        'where' => 
        array (
        ),
        'as' => 'calculator.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.corporative.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/corporative/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:8,4',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@delete_selected_items',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@delete_selected_items',
        'as' => 'api.corporative.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.corporative.get_corporative' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_corporative',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeApiController@get_corporative',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeApiController@get_corporative',
        'as' => 'api.corporative.get_corporative',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'corporative',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,1',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@index',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'corporative/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,2',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@create',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'corporative',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,2',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@store',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'corporative/{corporative}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,3',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@edit',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'corporative/{corporative}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,3',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@update',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'corporative/{corporative}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,1',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@show',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'corporative/{corporative}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,4',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@destroy',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'corporative/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,3',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@changeStatusFalse',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'corporative/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,3',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@changeStatusTrue',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'corporative.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'corporative/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:8,3',
        ),
        'uses' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@deleteFile',
        'controller' => 'Modules\\Corporative\\Http\\Controllers\\CorporativeController@deleteFile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'corporative.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.coursefaq.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/coursefaq/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:25,4',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@delete_selected_items',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@delete_selected_items',
        'as' => 'api.coursefaq.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.coursefaq.get_faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_faq/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQApiController@get_faq',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQApiController@get_faq',
        'as' => 'api.coursefaq.get_faq',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coursefaq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,1',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@index',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coursefaq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,2',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@create',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/coursefaq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,2',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@store',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coursefaq/{coursefaq}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,3',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@edit',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/coursefaq/{coursefaq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,3',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@update',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coursefaq/{coursefaq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,1',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@show',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/coursefaq/{coursefaq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,4',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@destroy',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coursefaq/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,3',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@changeStatusFalse',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coursefaq/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,3',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@changeStatusTrue',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coursefaq.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coursefaq/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:25,3',
        ),
        'uses' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@deleteFile',
        'controller' => 'Modules\\CourseFAQ\\Http\\Controllers\\CourseFAQController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'coursefaq.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.customer.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:10,4',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@delete_selected_items',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@delete_selected_items',
        'as' => 'api.customer.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.customer.get_customers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerApiController@get_customers',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerApiController@get_customers',
        'as' => 'api.customer.get_customers',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,1',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@index',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,2',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@create',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,2',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@store',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/{customer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,3',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@edit',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,3',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@update',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,1',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@show',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,4',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@destroy',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,3',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@changeStatusFalse',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,3',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@changeStatusTrue',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,3',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@deleteFile',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.changeOrderUp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/order_up/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,3',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@changeOrderUp',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@changeOrderUp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.changeOrderUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.changeOrderDown' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/order_down/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:10,3',
        ),
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@changeOrderDown',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@changeOrderDown',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'customer.changeOrderDown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.headerdatas.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/headerdatas/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:13,4',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@delete_selected_items',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@delete_selected_items',
        'as' => 'api.headerdatas.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.get_headerdatas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_headerdatas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDataApiController@get_headerdatas',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDataApiController@get_headerdatas',
        'as' => 'api.get_headerdatas',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'headerdatas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,1',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@index',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'headerdatas/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,2',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@create',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'headerdatas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,2',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@store',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'headerdatas/{headerdata}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,3',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@edit',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'headerdatas/{headerdata}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,3',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@update',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'headerdatas/{headerdata}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,1',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@show',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'headerdatas/{headerdata}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,4',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@destroy',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'headerdatas/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,3',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@changeStatusFalse',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'headerdatas/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,3',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@changeStatusTrue',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'headerdatas/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,3',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@deleteFile',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@deleteFile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.changeOrderUp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'headerdatas/order_up/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,3',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@changeOrderUp',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@changeOrderUp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.changeOrderUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerdatas.changeOrderDown' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'headerdatas/order_down/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:13,3',
        ),
        'uses' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@changeOrderDown',
        'controller' => 'Modules\\HeaderDatas\\Http\\Controllers\\HeaderDatasController@changeOrderDown',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerdatas.changeOrderDown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.lang.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lang/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:4,4',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@delete_selected_items',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@delete_selected_items',
        'as' => 'api.lang.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.lang.get_langs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_langs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangApiController@get_langs',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangApiController@get_langs',
        'as' => 'api.lang.get_langs',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.lang.get_langs_group' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_langs/{group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangApiController@get_langs_group',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangApiController@get_langs_group',
        'as' => 'api.lang.get_langs_group',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,1',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@index',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,2',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@create',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,2',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@store',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{lang}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,3',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@edit',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,3',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@update',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,1',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@show',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,4',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@destroy',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.changeDefault' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/changeDefault/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,2',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeDefault',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeDefault',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.changeDefault',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,3',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeStatusFalse',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,3',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeStatusTrue',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.changeOrderUp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/order_up/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,3',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeOrderUp',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeOrderUp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.changeOrderUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.changeOrderDown' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/order_down/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:4,3',
        ),
        'uses' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeOrderDown',
        'controller' => 'Modules\\Lang\\Http\\Controllers\\LangController@changeOrderDown',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.changeOrderDown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.lesson.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lesson/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:21,4',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@delete_selected_items',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@delete_selected_items',
        'as' => 'api.lesson.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.lesson.get_titles' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lesson/get_titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@get_titles',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@get_titles',
        'as' => 'api.lesson.get_titles',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.lesson.get_lesson' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_lesson/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonApiController@get_lesson',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonApiController@get_lesson',
        'as' => 'api.lesson.get_lesson',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lesson.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lesson',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:21,1',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@index',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'lesson.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lesson.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lesson/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:21,2',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@create',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'lesson.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lesson.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/lesson',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:21,2',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@store',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'lesson.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lesson.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lesson/{lesson}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:21,3',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@edit',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'lesson.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lesson.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/lesson/{lesson}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:21,3',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@update',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'lesson.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lesson.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lesson/{lesson}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:21,1',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@show',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'lesson.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lesson.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/lesson/{lesson}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:21,4',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@destroy',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'lesson.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lesson.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lesson/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:21,3',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@changeStatusFalse',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'lesson.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lesson.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lesson/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:21,3',
        ),
        'uses' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@changeStatusTrue',
        'controller' => 'Modules\\Lesson\\Http\\Controllers\\LessonController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'lesson.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.menu.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.menu.index',
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@index',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.menu.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.menu.store',
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@store',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.menu.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.menu.show',
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@show',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.menu.update',
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@update',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.menu.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.menu.destroy',
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@destroy',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.menu.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/menu/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@delete_selected_items',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@delete_selected_items',
        'as' => 'api.menu.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.menu.get_menu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuApiController@get_menu',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuApiController@get_menu',
        'as' => 'api.menu.get_menu',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\SearchController@search',
        'controller' => 'App\\Http\\Controllers\\SearchController@search',
        'as' => 'api.search',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,1',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@index',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,2',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@create',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,2',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@store',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu/{menu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,3',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@edit',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,3',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@update',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,1',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@show',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,4',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@destroy',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,3',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@changeStatusFalse',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,3',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@changeStatusTrue',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:1,3',
        ),
        'uses' => 'Modules\\Menu\\Http\\Controllers\\MenuController@deleteFile',
        'controller' => 'Modules\\Menu\\Http\\Controllers\\MenuController@deleteFile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'menu.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.news.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/news/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:29,4',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@delete_selected_items',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@delete_selected_items',
        'as' => 'api.news.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.news.pin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/news/pin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:29,3',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@pin',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@pin',
        'as' => 'api.news.pin',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.news.unpin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/news/unpin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:29,3',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@unpin',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@unpin',
        'as' => 'api.news.unpin',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.news.get_news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsApiController@get_news',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsApiController@get_news',
        'as' => 'api.news.get_news',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.news.get_one_news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_news/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsApiController@get_one_news',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsApiController@get_one_news',
        'as' => 'api.news.get_one_news',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,1',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@index',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,2',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@create',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,2',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@store',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/{news}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,3',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@edit',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,3',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@update',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,1',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@show',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,4',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@destroy',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,3',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@changeStatusFalse',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,3',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@changeStatusTrue',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:29,3',
        ),
        'uses' => 'Modules\\News\\Http\\Controllers\\NewsController@deleteFile',
        'controller' => 'Modules\\News\\Http\\Controllers\\NewsController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'news.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.partners.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/partners/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:14,4',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@delete_selected_items',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@delete_selected_items',
        'as' => 'api.partners.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.partners.get_partners' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersApiController@get_partners',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersApiController@get_partners',
        'as' => 'api.partners.get_partners',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,1',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@index',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,2',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@create',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,2',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@store',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/{partners}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,3',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@edit',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/partners/{partners}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,3',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@update',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/{partners}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,1',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@show',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/partners/{partners}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,4',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@destroy',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,3',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@changeStatusFalse',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,3',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@changeStatusTrue',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:14,3',
        ),
        'uses' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@deleteFile',
        'controller' => 'Modules\\Partners\\Http\\Controllers\\PartnersController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'partners.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.privacy.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/privacy/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:7,4',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@delete_selected_items',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@delete_selected_items',
        'as' => 'api.privacy.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.privacy.get_privacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_privacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyApiController@get_privacy',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyApiController@get_privacy',
        'as' => 'api.privacy.get_privacy',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,1',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@index',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,2',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@create',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/privacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,2',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@store',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy/{privacy}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,3',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@edit',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/privacy/{privacy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,3',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@update',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy/{privacy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,1',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@show',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/privacy/{privacy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,4',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@destroy',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,3',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@changeStatusFalse',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,3',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@changeStatusTrue',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:7,3',
        ),
        'uses' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@deleteFile',
        'controller' => 'Modules\\Privacy\\Http\\Controllers\\PrivacyController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.project.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/project/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:9,4',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@delete_selected_items',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@delete_selected_items',
        'as' => 'api.project.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.project.get_projects' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectApiController@get_projects',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectApiController@get_projects',
        'as' => 'api.project.get_projects',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.project.get_project' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_project/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectApiController@get_project',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectApiController@get_project',
        'as' => 'api.project.get_project',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,1',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@index',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/project/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,2',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@create',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,2',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@store',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/project/{project}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,3',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@edit',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/project/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,3',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@update',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/project/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,1',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@show',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/project/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,4',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@destroy',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/project/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,3',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@changeStatusFalse',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/project/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,3',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@changeStatusTrue',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'project.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/project/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:9,3',
        ),
        'uses' => 'Modules\\Project\\Http\\Controllers\\ProjectController@deleteFile',
        'controller' => 'Modules\\Project\\Http\\Controllers\\ProjectController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'project.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.room.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/room/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:12,4',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@delete_selected_items',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@delete_selected_items',
        'as' => 'api.room.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.room.get_rooms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_rooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomApiController@get_rooms',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomApiController@get_rooms',
        'as' => 'api.room.get_rooms',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/room',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,1',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@index',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/room/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,2',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@create',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/room',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,2',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@store',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/room/{room}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,3',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@edit',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/room/{room}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,3',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@update',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/room/{room}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,1',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@show',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/room/{room}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,4',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@destroy',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/room/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,3',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@changeStatusFalse',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/room/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,3',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@changeStatusTrue',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'room.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/room/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:12,3',
        ),
        'uses' => 'Modules\\Room\\Http\\Controllers\\RoomController@deleteFile',
        'controller' => 'Modules\\Room\\Http\\Controllers\\RoomController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'room.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.scholarshipprogram.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/scholarshipprogram/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:28,4',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@delete_selected_items',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@delete_selected_items',
        'as' => 'api.scholarshipprogram.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.scholarshipprogram.get_scholarshipprogram' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_scholarshipprogram',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramApiController@get_scholarshipprogram',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramApiController@get_scholarshipprogram',
        'as' => 'api.scholarshipprogram.get_scholarshipprogram',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/scholarshipprogram',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,1',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@index',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/scholarshipprogram/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,2',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@create',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/scholarshipprogram',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,2',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@store',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/scholarshipprogram/{scholarshipprogram}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,3',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@edit',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/scholarshipprogram/{scholarshipprogram}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,3',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@update',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/scholarshipprogram/{scholarshipprogram}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,1',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@show',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/scholarshipprogram/{scholarshipprogram}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,4',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@destroy',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/scholarshipprogram/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,3',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@changeStatusFalse',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/scholarshipprogram/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,3',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@changeStatusTrue',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scholarshipprogram.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/scholarshipprogram/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:28,3',
        ),
        'uses' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@deleteFile',
        'controller' => 'Modules\\ScholarshipProgram\\Http\\Controllers\\ScholarshipProgramController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'scholarshipprogram.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.siteinfo.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/siteinfo/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:6,4',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@delete_selected_items',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@delete_selected_items',
        'as' => 'api.siteinfo.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.siteinfo.get_siteinfo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_siteinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoApiController@get_siteinfo',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoApiController@get_siteinfo',
        'as' => 'api.siteinfo.get_siteinfo',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.contact.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contactform/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@contactForm',
        'controller' => 'App\\Http\\Controllers\\ContactController@contactForm',
        'as' => 'api.contact.post',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.contact.vebinar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/vebinar/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@vebinar',
        'controller' => 'App\\Http\\Controllers\\ContactController@vebinar',
        'as' => 'api.contact.vebinar',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.contact.workshop' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/workshop/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@workshop',
        'controller' => 'App\\Http\\Controllers\\ContactController@workshop',
        'as' => 'api.contact.workshop',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.contact.carrier_and_schoolarship' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/carrier_and_schoolarship/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@carrier_and_schoolarship',
        'controller' => 'App\\Http\\Controllers\\ContactController@carrier_and_schoolarship',
        'as' => 'api.contact.carrier_and_schoolarship',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.google_datas.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/google_datas/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\GoogleDatasController@google_datas',
        'controller' => 'App\\Http\\Controllers\\GoogleDatasController@google_datas',
        'as' => 'api.google_datas.get',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/siteinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,1',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@index',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/siteinfo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,2',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@create',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/siteinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,2',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@store',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/siteinfo/{siteinfo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,3',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@edit',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/siteinfo/{siteinfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,3',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@update',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/siteinfo/{siteinfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,1',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@show',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/siteinfo/{siteinfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,4',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@destroy',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/siteinfo/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,3',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@changeStatusFalse',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/siteinfo/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,3',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@changeStatusTrue',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteinfo.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/siteinfo/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:6,3',
        ),
        'uses' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@deleteFile',
        'controller' => 'Modules\\SiteInfo\\Http\\Controllers\\SiteInfoController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteinfo.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.training.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/training/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:23,4',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@delete_selected_items',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@delete_selected_items',
        'as' => 'api.training.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.training.get_trainings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_trainings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingApiController@get_trainings',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingApiController@get_trainings',
        'as' => 'api.training.get_trainings',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,1',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@index',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/training/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,2',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@create',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,2',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@store',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/training/{training}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,3',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@edit',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/training/{training}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,3',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@update',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/training/{training}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,1',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@show',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/training/{training}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,4',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@destroy',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/training/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,3',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@changeStatusFalse',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/training/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,3',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@changeStatusTrue',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'training.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/training/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:23,3',
        ),
        'uses' => 'Modules\\Training\\Http\\Controllers\\TrainingController@deleteFile',
        'controller' => 'Modules\\Training\\Http\\Controllers\\TrainingController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'training.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.trainingcategory.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainingcategory/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:22,4',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@delete_selected_items',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@delete_selected_items',
        'as' => 'api.trainingcategory.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.trainingcategory.get_categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryApiController@get_categories',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryApiController@get_categories',
        'as' => 'api.trainingcategory.get_categories',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,1',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@index',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingcategory/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,2',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@create',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/trainingcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,2',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@store',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingcategory/{trainingcategory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,3',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@edit',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/trainingcategory/{trainingcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,3',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@update',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingcategory/{trainingcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,1',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@show',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/trainingcategory/{trainingcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,4',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@destroy',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingcategory/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,3',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@changeStatusFalse',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingcategory/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,3',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@changeStatusTrue',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.changeOrderUp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingcategory/order_up/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,3',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@changeOrderUp',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@changeOrderUp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.changeOrderUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingcategory.changeOrderDown' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingcategory/order_down/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:22,3',
        ),
        'uses' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@changeOrderDown',
        'controller' => 'Modules\\TrainingCategory\\Http\\Controllers\\TrainingCategoryController@changeOrderDown',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingcategory.changeOrderDown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.trainingsubject.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainingsubject/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:24,4',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@delete_selected_items',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@delete_selected_items',
        'as' => 'api.trainingsubject.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.trainingsubject.get_trainingsubject' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_trainingsubject/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectApiConteoller@get_trainingsubject',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectApiConteoller@get_trainingsubject',
        'as' => 'api.trainingsubject.get_trainingsubject',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingsubject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,1',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@index',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingsubject/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,2',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@create',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/trainingsubject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,2',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@store',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingsubject/{trainingsubject}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,3',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@edit',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/trainingsubject/{trainingsubject}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,3',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@update',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingsubject/{trainingsubject}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,1',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@show',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/trainingsubject/{trainingsubject}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,4',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@destroy',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingsubject/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,3',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@changeStatusFalse',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingsubject/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,3',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@changeStatusTrue',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trainingsubject.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trainingsubject/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:24,3',
        ),
        'uses' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@deleteFile',
        'controller' => 'Modules\\TrainingSubject\\Http\\Controllers\\TrainingSubjectController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'trainingsubject.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.translate.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/translate/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:3,4',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@delete_selected_items',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@delete_selected_items',
        'as' => 'api.translate.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.translate.get_translate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_translate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateApiController@get_translate',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateApiController@get_translate',
        'as' => 'api.translate.get_translate',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.translate.get_translate_group' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_translate/{group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateApiController@get_translate_group',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateApiController@get_translate_group',
        'as' => 'api.translate.get_translate_group',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translate.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:3,1',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@index',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'translate.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translate.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translate/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:3,2',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@create',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'translate.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translate.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/translate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:3,2',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@store',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'translate.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translate.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translate/{translate}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:3,3',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@edit',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'translate.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translate.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/translate/{translate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:3,3',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@update',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'translate.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translate.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translate/{translate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:3,1',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@show',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'translate.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translate.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/translate/{translate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:3,4',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@destroy',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'translate.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translate.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translate/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:3,3',
        ),
        'uses' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@deleteFile',
        'controller' => 'Modules\\Translate\\Http\\Controllers\\TranslateController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'translate.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.userrole.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/userrole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.userrole.index',
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@index',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.userrole.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/userrole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.userrole.store',
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@store',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.userrole.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/userrole/{userrole}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.userrole.show',
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@show',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.userrole.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/userrole/{userrole}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.userrole.update',
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@update',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.userrole.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/userrole/{userrole}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'api.userrole.destroy',
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@destroy',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.userrole.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/userrole/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkpermission:6 ,4',
          2 => 'web',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@delete_selected_items',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@delete_selected_items',
        'as' => 'api.userrole.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userrole.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userrole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@index',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'userrole.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userrole.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userrole/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@create',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'userrole.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userrole.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/userrole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@store',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'userrole.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userrole.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userrole/{userrole}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@edit',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'userrole.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userrole.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/userrole/{userrole}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@update',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserRoleController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'userrole.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permission.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/{role_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@index',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'permission.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permission.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/create/{role_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@create',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'permission.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permission.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permission/store/{role_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@store',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'permission.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permission.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/edit/{role_id?}/{page_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@edit',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'permission.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permission.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permission/update/{role_id?}/{page_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@update',
        'controller' => 'Modules\\UserRole\\Http\\Controllers\\UserPermissionController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'permission.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vacancy.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/vacancy/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:11,4',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@delete_selected_items',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@delete_selected_items',
        'as' => 'api.vacancy.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vacancy.get_vacancy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_vacancy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyApiController@get_vacancy',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyApiController@get_vacancy',
        'as' => 'api.vacancy.get_vacancy',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vacancy.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vacancy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:11,1',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@index',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vacancy.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vacancy.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vacancy/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:11,2',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@create',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vacancy.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vacancy.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/vacancy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:11,2',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@store',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vacancy.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vacancy.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vacancy/{vacancy}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:11,3',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@edit',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vacancy.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vacancy.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/vacancy/{vacancy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:11,3',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@update',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vacancy.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vacancy.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/vacancy/{vacancy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:11,1',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@destroy',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vacancy.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vacancy.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vacancy/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:11,3',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@changeStatusFalse',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vacancy.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vacancy.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vacancy/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:11,3',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@changeStatusTrue',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vacancy.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vacancy.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vacancy/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:11,3',
        ),
        'uses' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@deleteFile',
        'controller' => 'Modules\\Vacancy\\Http\\Controllers\\VacancyController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vacancy.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vebinar.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/vebinar/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:26,4',
        ),
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@delete_selected_items',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@delete_selected_items',
        'as' => 'api.vebinar.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vebinar.get_vebinar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_vebinar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarApiController@get_vebinar',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarApiController@get_vebinar',
        'as' => 'api.vebinar.get_vebinar',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vebinar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,1',
        ),
        'as' => 'vebinar.index',
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@index',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vebinar/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,2',
        ),
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@create',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vebinar.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/vebinar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,2',
        ),
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@store',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vebinar.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vebinar/{vebinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,1',
        ),
        'as' => 'vebinar.show',
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@show',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vebinar/{vebinar}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,1',
        ),
        'as' => 'vebinar.edit',
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@edit',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/vebinar/{vebinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,1',
        ),
        'as' => 'vebinar.update',
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@update',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/vebinar/{vebinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,1',
        ),
        'as' => 'vebinar.destroy',
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@destroy',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vebinar/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,3',
        ),
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@changeStatusFalse',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vebinar.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vebinar/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,3',
        ),
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@changeStatusTrue',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vebinar.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vebinar/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,3',
        ),
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@deleteFile',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vebinar.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vebinar.patch' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/vebinar/{vebinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:26,3',
        ),
        'uses' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@update',
        'controller' => 'Modules\\Vebinar\\Http\\Controllers\\VebinarController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'vebinar.patch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.videolessons.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/videolessons/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:19,4',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@delete_selected_items',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@delete_selected_items',
        'as' => 'api.videolessons.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.videolessons.get_name' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_videolessons/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsApiController@get_videolessons',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsApiController@get_videolessons',
        'as' => 'api.videolessons.get_name',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.videolessons.get_videolesson' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_videolesson_content/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsApiController@get_videolesson',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsApiController@get_videolesson',
        'as' => 'api.videolessons.get_videolesson',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,1',
        ),
        'as' => 'videolessons.index',
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@index',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessons/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,2',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@create',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessons.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/videolessons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,2',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@store',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessons.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessons/{videolesson}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,1',
        ),
        'as' => 'videolessons.show',
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@show',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessons/{videolesson}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,1',
        ),
        'as' => 'videolessons.edit',
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@edit',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/videolessons/{videolesson}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,1',
        ),
        'as' => 'videolessons.update',
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@update',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/videolessons/{videolesson}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,1',
        ),
        'as' => 'videolessons.destroy',
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@destroy',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessons/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,3',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@changeStatusFalse',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessons.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessons/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,3',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@changeStatusTrue',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessons.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessons/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,3',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@deleteFile',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessons.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.changeOrderUp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessons/order_up/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,3',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@changeOrderUp',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@changeOrderUp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessons.changeOrderUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.changeOrderDown' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessons/order_down/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,3',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@changeOrderDown',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@changeOrderDown',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessons.changeOrderDown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessons.customUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/videolessons/{videolessons}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:19,3',
        ),
        'uses' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@update',
        'controller' => 'Modules\\VideoLessons\\Http\\Controllers\\VideoLessonsController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessons.customUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.videolessonscategory.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/videolessonscategory/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:18,4',
        ),
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@delete_selected_items',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@delete_selected_items',
        'as' => 'api.videolessonscategory.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.videolessonscategory.get_videolessonscategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_videolessonscategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryApiController@get_videolessonscategory',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryApiController@get_videolessonscategory',
        'as' => 'api.videolessonscategory.get_videolessonscategory',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonscategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,1',
        ),
        'as' => 'videolessonscategory.index',
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@index',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonscategory/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,2',
        ),
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@create',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonscategory.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/videolessonscategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,2',
        ),
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@store',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonscategory.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonscategory/{videolessonscategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,1',
        ),
        'as' => 'videolessonscategory.show',
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@show',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonscategory/{videolessonscategory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,1',
        ),
        'as' => 'videolessonscategory.edit',
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@edit',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/videolessonscategory/{videolessonscategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,1',
        ),
        'as' => 'videolessonscategory.update',
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@update',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/videolessonscategory/{videolessonscategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,1',
        ),
        'as' => 'videolessonscategory.destroy',
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@destroy',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonscategory/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,3',
        ),
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@changeStatusFalse',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonscategory.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonscategory/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,3',
        ),
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@changeStatusTrue',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonscategory.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.changeOrderUp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonscategory/order_up/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,3',
        ),
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@changeOrderUp',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@changeOrderUp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonscategory.changeOrderUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.changeOrderDown' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonscategory/order_down/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,3',
        ),
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@changeOrderDown',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@changeOrderDown',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonscategory.changeOrderDown',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonscategory.patch' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/videolessonscategory/{videolessonscategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:18,3',
        ),
        'uses' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@update',
        'controller' => 'Modules\\VideoLessonsCategory\\Http\\Controllers\\VideoLessonsCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonscategory.patch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.videolessonstitle.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/videolessonstitle/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:20,4',
        ),
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@delete_selected_items',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@delete_selected_items',
        'as' => 'api.videolessonstitle.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.videolessonstitle.get_name' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_videolessonstitle/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleApiController@get_videolessonstitle',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleApiController@get_videolessonstitle',
        'as' => 'api.videolessonstitle.get_name',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonstitle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,1',
        ),
        'as' => 'videolessonstitle.index',
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@index',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonstitle/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,2',
        ),
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@create',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonstitle.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/videolessonstitle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,2',
        ),
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@store',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonstitle.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonstitle/{videolessonstitle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,1',
        ),
        'as' => 'videolessonstitle.show',
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@show',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonstitle/{videolessonstitle}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,1',
        ),
        'as' => 'videolessonstitle.edit',
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@edit',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/videolessonstitle/{videolessonstitle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,1',
        ),
        'as' => 'videolessonstitle.update',
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@update',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/videolessonstitle/{videolessonstitle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,1',
        ),
        'as' => 'videolessonstitle.destroy',
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@destroy',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonstitle/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,3',
        ),
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@changeStatusFalse',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonstitle.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/videolessonstitle/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,3',
        ),
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@changeStatusTrue',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonstitle.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videolessonstitle.patch' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/videolessonstitle/{videolessonstitle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:20,3',
        ),
        'uses' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@update',
        'controller' => 'Modules\\VideoLessonsTitle\\Http\\Controllers\\VideoLessonsTitleController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'videolessonstitle.patch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.workshop.delete_selected_items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/workshop/delete_selected_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'checkpermission:27,4',
        ),
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@delete_selected_items',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@delete_selected_items',
        'as' => 'api.workshop.delete_selected_items',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.workshop.get_workshop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{locale}/get_workshop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopApiController@get_workshop',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopApiController@get_workshop',
        'as' => 'api.workshop.get_workshop',
        'namespace' => NULL,
        'prefix' => 'api/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workshop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,1',
        ),
        'as' => 'workshop.index',
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@index',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workshop/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,2',
        ),
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@create',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'workshop.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/workshop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,2',
        ),
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@store',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'workshop.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workshop/{workshop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,1',
        ),
        'as' => 'workshop.show',
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@show',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workshop/{workshop}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,1',
        ),
        'as' => 'workshop.edit',
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@edit',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/workshop/{workshop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,1',
        ),
        'as' => 'workshop.update',
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@update',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/workshop/{workshop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,1',
        ),
        'as' => 'workshop.destroy',
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@destroy',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.changeStatusFalse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workshop/changeStatusFalse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,3',
        ),
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@changeStatusFalse',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@changeStatusFalse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'workshop.changeStatusFalse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.changeStatusTrue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workshop/changeStatusTrue/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,3',
        ),
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@changeStatusTrue',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@changeStatusTrue',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'workshop.changeStatusTrue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workshop/deleteFile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,3',
        ),
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@deleteFile',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'workshop.deleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.patch' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/workshop/{workshop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkpermission:27,3',
        ),
        'uses' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@update',
        'controller' => 'Modules\\Workshop\\Http\\Controllers\\WorkshopController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'workshop.patch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

<?php $post = News::get_news_post_by_id($_GET['id'])?>

<ol class="breadcrumb">
    <li><a href="/">Новости</a></li>
    <li class="active"><?php echo $post['title'];?></li>
</ol>

<h1><?php echo $post['title'];?></h1>

<?php echo $post['full']?><br>

ID Авторa: <?php echo $post['author_id']?><br>
Создано: в <?php echo date('H:i:s, d/y', strtotime($post['created_at']))?><br>
<hr>
MCTop, будь с нами.
<br><br>

<h2>VK</h2>

<div>

    <script type="text/javascript">
        VK.init({apiId: 4585317, onlyWidgets: true});
    </script>

    <div id="vk_comments"></div>
    <script type="text/javascript">
        VK.Widgets.Comments("vk_comments", {limit: 5, width: "665", attach: false});
    </script>
    <hr>

    <div id="vk_like"></div>
    <script type="text/javascript">
        VK.Widgets.Like("vk_like", {type: "button"});
    </script>
</div>

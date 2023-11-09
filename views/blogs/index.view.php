<?php 
    require base_path('views/partials/head.php');
    require base_path('views/partials/nav.php');
    #require base_path( 'views/partials/banner.php');
?>

<main class="p-4 m-4">
<div class="bg-white">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <p class="mt-2 text-lg leading-8 text-blue-600"> Learn how to grow your business with our expert advice.</p>
    </div>
    <div class="">
      <article class="flex max-w-2xl p-4 m-4 leading-8 flex-col justify-between">
      <?php foreach($posts as $post ):?>
        <div class="group relative">
        <a href="/blog?id=<?= $post['id']?>">
              <span class="absolute text-center inset-0"></span>
              <h2 class="p-2 text-center m-3 text-lg font-semibold leading-6 text-blue-700 group-hover:text-black-600"> 
                <?= htmlspecialchars($post['title']) ;?>
              </h2>
        </a>
         
        <a href="#">
           <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
        </a> 
       
          <p class="mt-5 line-clamp-40 leading-6 text-black-600">
          <?= htmlspecialchars($post['body']) ;?>
<p class="p-1 m-1">
   <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="/blog?id=<?= $post['user_id']?>">
                Read more
            </a>
</p>
        </p>

        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <div class="text-sm leading-6">
            <div class="flex items-center gap-x-4 text-xs">
        </div>
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-black-500">
            <?= $date = date('d-m-Y');?> </time>
          <a href="#" class="relative z-10 rounded-full bg-black-50 px-3 py-1.5 font-medium text-black-600 hover:bg-gray-100"> by : chatGpt*</a>
        </div>

        <?php endforeach; ?>
      </article>
</main>

<?php require base_path('views/partials/footer.php') ?>
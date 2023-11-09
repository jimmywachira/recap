<?php
 require base_path('views/partials/head.php');
 require base_path('views/partials/nav.php');
 #require base_path( 'views/partials/banner.php');
?>

<main>
    <div class="mx-auto max-w-2xl lg:mx-0">
      <div class="mt-4 text-lg text-center leading-8">
        <h1> Grow your business with our expert advice </h1>
      </div>

      <div class="mt-5 grid grid-cols-1 gap-x-8 gap-y-16 border-t border-black-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-black-500">
              <?= $date = date('d-m-Y');?> </time>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-black-600 hover:bg-gray-100">AI</a>
          </div>

          <div class="group relative">
            <h2 class="p-3 m-4 text-lg text-center font-semibold leading-6 text-blue-800 group-hover:text-gray-600">
              <a href="/blog?id=<?= $post['id']?>">
                <span class="absolute inset-0 text-center"></span>
                <h2 class="p-2 text-center m-3 text-lg font-semibold leading-6 text-blue-700 group-hover:text-black-600"> 
                <?= htmlspecialchars($post['title']) ;?>
              </h2>
              </a>
              <a href="#">
            <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
          </a> 
            </h2>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
              <?= htmlspecialchars($post['body']) ;?>
          </p>
      
          </div>
          <div class="text-sm leading-6  inline-flex relative mt-4  items-center gap-x-4">
          <div class="border border-current px-4 py-2 rounded text-black-500">
              <a href="/blog/edit?id=<?= $post['id']?>"> edit </a>
             
            </div>

            <div class="">
              <img src="https://api.dicebear.com/7.x/adventurer/svg?seed=Gizmo" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              <p class="font-bold text-black-900">
                  user : <a href="#">
                    <span class="absolute inset-0"></span>
                    <?= $post['id']?>
                  </a>
                </p>
                <p class="text-gray-600">Co-Founder - weCode</p>
            </div>
           
            </div>
          </div>
        </article>

          </div>
      </div>
    </div>
  </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
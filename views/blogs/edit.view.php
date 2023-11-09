<?php
 require base_path('views/partials/head.php');
 require base_path('views/partials/nav.php');
 require base_path( 'views/partials/banner.php');
?>

<main class="m-2 p-2">
   <div class="shadow sm:overflow-hidden sm:rounded-md">
      <form method="POST" action="/blog">
               <input type="hidden" name="_method" value="PATCH">
               <input type="hidden" name="id" value="<?=$post['id']?>">

         <div class="">
               <div class="space-y-3  px-1 py-1 sm:p-2">
               <div> <label for="title" class="" >title</label></div>
               <input id="title" name="title" class="" placeholder="title">
               <?= $_POST['title'] ?? '' ?></input>
               </div>

               <div class="space-y-3 px-1 py-1 sm:p-2">
               <div><label for="body" class="text-center" >Body</label></div>
               <textarea id="body" name="body"  placeholder="blog post">
                  <?= $_POST['body'] ?? '' ?> </textarea>
                  
                     <?php if (isset($errors['body'])) : ?>
                  <p class="text-red"><?= $errors['body'] ?></p>
               <?php endif; ?>
               </div>   
               
               <div class="space-y-3 px-1 py-1 sm:p-2">
                  <div> <label for="userId" class="" >user id</label></div>
                     <div class="p-1"><input type="number" id="userId" name="user_id" placeholder="user Id.">
                        <?= $_POST['user_id'] ?? '' ?> </input></div>
                  </div>

            <div class="space-y-3 px-3 py-2 sm:p-2 justify-end">
               <a href="/blogs" class="text-blue-500 p-2 m-2" type="submit"> cancel </a>

            <button class="text-blue-500 p-2 m-2" type="submit"> update </button>
               </div>
               </div>
      </form>

      <form class="mt-1 py-2" action="" method="post">
         <input type="hidden" name="_method" value="DELETE">
         <input type="hidden" name="id" value="<?= $post['id']?>">
         <button class="text-red-400 border border-current px-2 mx-2 rounded"> Delete</button>
      </form>
   </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
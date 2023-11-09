<?php
 require base_path('views/partials/head.php');
 require base_path('views/partials/nav.php');
 require base_path( 'views/partials/banner.php');
?>

<main>
   <div class="m-2 p-2 -space-y-px rounded-md shadow-sm">
      <form method="POST" action="/blogs">
         <div class="shadow sm:overflow-hidden sm:rounded-md">
            <div class="space-y-3  px-1 py-1 sm:p-2">
            <div> <label for="title" class="" >title</label></div>
            <input id="title" name="title" placeholder="title"><?= $_POST['title'] ?? ''; ?> </input>
            </div>

            <div class="space-y-3 px-1 py-1 sm:p-2">
            <div><label for="body" class="" >Body</label></div>
            <textarea id="body" name="body" placeholder="body"><?= $_POST['body'] ?? ''; ?> </textarea>
            
            <div class="space-y-3 px-1 py-1 sm:p-2">
               <div> <label for="userId" class="" > user id </label></div>
               <div class="p-1"> <input type="number" id="userId" name="user_id" placeholder="id"> <?= $_POST['user_id'] ?? ''; ?></input> </div>
            </div>

            <div> <?php if (isset($errors['body'])) : ?>
               <p class="text-red"><?= $errors['body'] ?></p>
            <?php endif; ?> </div>
            </div>

         <div class="space-y-3 px-3 py-2 sm:p-2">
         <button class="text-blue-500 p-2 m-2" type="submit"> Submit </button>
            </div>
            </div>
      </form>
   </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
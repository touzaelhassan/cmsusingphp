<div class="posts__header">
  <div class="add_post_link"><a href="./posts.php?source=create_post" class="btn btn-success btn-sm">ADD POST</a></div>
</div>

<div class="posts__content">
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Post Id</th>
        <th>Category</th>
        <th>Author</th>
        <th>Title</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Status</th>
        <th>Comments</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($posts as $post) : ?>
        <?php $category = get_category_by_id($post["category_id"]); ?>
        <tr>
          <td><?php echo $post["post_id"]; ?></td>
          <td><?php echo $category["category_title"]; ?></td>
          <td><?php echo $post["post_author"]; ?></td>
          <td><?php echo $post["post_title"]; ?></td>
          <td><img src="../images/<?php echo $post["post_image"]; ?>" class="table__image"></td>
          <td><?php echo $post["post_tags"]; ?></td>
          <td><?php echo $post["post_status"]; ?></td>
          <td><?php echo $post["post_comments"]; ?></td>
          <td><?php echo $post["post_date"]; ?></td>
          <td><a href="posts.php?delete=<?php echo $post["post_id"]; ?>" class="btn btn-danger btn-sm">DELETE</a></td>
          <td><a href="posts.php?source=update_post&update=<?php echo $post["post_id"]; ?>" class="btn btn-primary btn-sm">UPDATE</a></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
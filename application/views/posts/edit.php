<div class="pmd-content" id="content">
        <h2 class="headline"><?= $title; ?></h2>

<?php echo validation_errors();
//$attributes = array('class' => 'form-group');
echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label class="control-label">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label class="control-label">Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form-group">
  <label class="control-label">Category</label>
  <select name="category_id" class="form-control">
    <?php foreach($categories as $category): ?>
      <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
    <?php endforeach; ?>
  </select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
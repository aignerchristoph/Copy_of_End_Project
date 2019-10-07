
    <form action="actions/a_createCategory.php" method= "post">
      <label>Category name</label>
      <input  type="text" name="category_name"  placeholder="insert short name for a category" />

      <label>Title</label>
      <input  type="text" name="category_title"  placeholder="insert title for the web page" />

      <label>Link</label>
      <input  type="text" name="category_link"  placeholder="insert link of the sub-page" />
      
      <label>Size</label>
      <select name="category_link">
        <option value="inspo-landing-big">inspo-landing-big</option>
        <option value="inspo-landing-small">inspo-landing-small</option>
      <select/>

      <label>Status</label>
      <select name="category_status">
        <option value="hidden">hidden</option>
        <option value="display">display</option>
      <select/>

      <label>Image</label>
      <input type="file" name="category_image" />
      
      <input type ="submit" value="Create" name="createButton" />

    </form>

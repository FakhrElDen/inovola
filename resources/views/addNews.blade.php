<div class="container col-sm-offset-4 col-sm-4">
    <h1>Add Latest News</h1><hr>
    <form class="formgroup" enctype="multipart/form-data" method="POST" action="http://localhost/football/public/admin/StoreNews">
        {{ @csrf_field() }}

        <label>Title</label><br>
        <textarea class="form-control" placeholder="News Title ..."  name="title" rows="2" required></textarea><br><br>

        <label>Content</label><br>
        <textarea class="form-control" placeholder="News Content ..."  name="body" rows="5" required></textarea><br><br>

        <label>Rating</label><br>
        <input type="number" name="rating" min="1" max="10" required><br><br>

        <label>Date & time</label><br>
        <input type="datetime-local" name="datetime" required><br><br>

        <label>Agency</label><br>
        <input type="text" name="agency" required><br><br>

        <input type="submit" style="font-weight: bold;" class="btn btn-success btn-block" value="Submit">
    </form>
</div>

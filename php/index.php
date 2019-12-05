<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h1 class="display-4 text-center"><i class="fas fa-book-open text-promary"></i> My<span class="text-primary">Book</span>List</h1>
        <form id="book-form">
            <div class="form-froup">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control">
            </div>
            <div class="form-froup">
                <label for="author">Author</label>
                <input type="text" id="author" class="form-control">
            </div>
            <div class="form-froup">
                <label for="isbn">ISBN#</label>
                <input type="text" id="isbn" class="form-control">
            </div><br/>
            <input type="submit" value="Add Book" class="btn btn-primary btn-block">
        </form><br/>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN Number</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="book-list">
            </tbody>
        </table>
    </div>
    <script src="app.js"></script>
</body>
</html>
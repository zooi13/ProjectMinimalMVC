<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<div class="container-fluid" style="max-width: 700px; margin: 30px">
    <h3>Редактировать категорию</h3><br>
    <form method="post" action="/categ/categ_ed_act">
        <div class="form-group">
            <label for="exampleInputCateg">Новое название категории:</label>
            <br>
            <input type="text" class="form-control" id="InputCateg" name="InputCateg" placeholder="Введите название категории">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Редактировать категорию</button>
    </form>
</div>

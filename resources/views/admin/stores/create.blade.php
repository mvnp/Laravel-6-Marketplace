<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <title>Lohas | Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Criar loja</h1>
                <form action="{{ url('admin/stores/store') }}" method="POST" enctype="application/x-www-form-urlencoded">
                    @csrf
                    <div class="form-group">
                        <label for="">Nome da loja</label>
                        <input type="text" class="form-control" name="name" required />
                    </div>
                    <div class="form-group">
                        <label for="">Descrição</label>
                        <input type="text" class="form-control" name="description" required />
                    </div>
                    <div class="form-group">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control" name="phone" required />
                    </div>
                    <div class="form-group">
                        <label for="">Whatsapp</label>
                        <input type="text" class="form-control" name="mobile_phone" required />
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" required />
                    </div>
                    <div class="form-group">
                        <label for="">Usuário</label>
                        <select class="form-control" name="user" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-4 form-group">
                        <button type="submit" class="btn btn-success btn-lg">Criar loja</button>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</body>
</html>
@extends('welcome')
@section('content')
<div class="text-right">
    <a href="{{ url('/form') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> New Data</a>
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="80" class="text-center">No</th>
            <th class="text-center">Colomn</th>
            <th class="text-center">Colomn</th>
            <th class="text-center">Colomn</th>
            <th class="text-center">Colomn</th>
            <th width="120" class="text-center"><i class="fa fa-cogs"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php
            for ($i=1; $i <= 10; $i++) {
        ?>
        <tr>
            <td class="text-center"><?= $i?></td>
            <td>Data <?= $i?></td>
            <td>Data <?= $i?></td>
            <td>Data <?= $i?></td>
            <td>Data <?= $i?></td>
            <td class="text-center">
                <a href="#" class="btn btn-sm btn-warning">
                    <i class="far fa-edit"></i>
                </a>
                <a href="#" onclick="return confirm ('Are you sure ?')" class="btn btn-sm btn-danger">
                    <i class="far fa-trash-alt"></i>
                </a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
@endsection
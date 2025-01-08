<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
    <style>
        table{
            border-collapse: collapse;
            margin: 20px 0px;
            text-align: left;
        }

        table,
        th,
        td{
            border: 1px solid;
            text-align: left;
            padding-right:20px; 
        }
    </style>
</head>
<body>
    <h1>Detail Siswa</h1>
    <a href="<?php echo e(route('siswa.index')); ?>">Kembali</a>

    <table>
        <tr>
            <td colspan="4" style="text-align: center;"> <img src="<?php echo e(asset('storage/public/siswas/' . $siswa->image)); ?>" width="120px" height="120px"></td>
        </tr>
        <tr>
            <th colspan="2">Akun Siswa</th>
            <th colspan="2">Data Siswa</th>
        </tr>
        <tr>
            <th>Nama</th>
            <td>: <?php echo e($siswa->name); ?></td>
            <th>Nis</th>
            <td>: <?php echo e($siswa->nis); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo e($siswa->email); ?> </td>
            <th>Kelas</th>
            <td> <?php echo e($siswa->tingkatan); ?> <?php echo e($siswa->jurusan); ?> <?php echo e($siswa->kelas); ?> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <th>No Hp</th>
            <td> <?php echo e($siswa->hp); ?> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <th>Status</th>
            <?php if($siswa->status == 1): ?>:
            <td>: Aktif</td>
            <?php else: ?>
            <td>: Tidak Aktif</td>
            <?php endif; ?>
        </tr>
    </table>
</body>
</html><?php /**PATH C:\laragon\www\mila_nirmala\resources\views/admin/siswa/show.blade.php ENDPATH**/ ?>
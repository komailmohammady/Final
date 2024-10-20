<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>نمایش لیست کارمندان</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Css/ShowEmployee.css" type="text/css">
</head>
<body dir="rtl">

<div class="container mt-5">
  <h2 class="text-center mb-4">نمایش لیست کارمندان</h2>
  <table class="table table-bordered text-center">
    <thead class="table-primary">
      <tr>
        <th>شماره</th>
        <th>نام</th>
        <th>موقعیت</th>
        <th>ویرایش</th>
        <th>حذف</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>علی احمدی</td>
        <td>مدیر فروش</td>
        <td><button class="btn btn-warning btn-sm">ویرایش</button></td>
        <td><button class="btn btn-danger btn-sm">حذف</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>سارا حسینی</td>
        <td>حسابدار</td>
        <td><button class="btn btn-warning btn-sm">ویرایش</button></td>
        <td><button class="btn btn-danger btn-sm">حذف</button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>محمد رضایی</td>
        <td>توسعه‌دهنده نرم‌افزار</td>
        <td><button class="btn btn-warning btn-sm">ویرایش</button></td>
        <td><button class="btn btn-danger btn-sm">حذف</button></td>
      </tr>
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

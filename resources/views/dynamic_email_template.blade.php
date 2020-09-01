<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body style="margin: 0; padding: 0;">
<table align="center" border="1" cellpadding="0" cellspacing="0" width="600">

 <tr>
 <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;">
 <img src="email/welcome.png" alt="" width="300" height="230" style="display: block;" />
</td>
 </tr>

 <tr>
  <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
 <table border="1" cellpadding="0" cellspacing="0" width="100%">
  <tr>
   <td style="text-align: center">
   Pendaftaran Tamu baru 
   </td>
  </tr>
  <tr>
  <td>

   <table border="1" cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td width="260" valign="top">
   Nama
  </td>
  <td style="text-align:center" width="20">
   :
  </td>
  <td width="260" valign="top">
  {{ $data['nama'] }}
  </td>
  </tr>
  <tr>
  <td width="260" valign="top">
   Email
  </td>
  <td style="text-align:center" width="20">
   :
  </td>
  <td width="260" valign="top">
  {{ $data['email'] }}
  </td>
  </tr>
  <tr>
  <td width="260" valign="top">
   Alamat
  </td>
  <td style="text-align:center" width="20">
   :
  </td>
  <td width="260" valign="top">
  {{ $data['alamat'] }}
  </td>
  </tr>
  <tr>
  <td width="260" valign="top">
   Komentar
  </td>
  <td style="text-align:center" width="20">
   :
  </td>
  <td width="260" valign="top">
  {{ $data['komentar'] }}
  </td>
 </tr>
 </table>

</td>
  </tr>

</table>
</body>
</html>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>NetShow</title>
    <meta name="NetShow" content="width=device-width, initial-scale=1.0" />
</head>

<body style="margin: 0; padding: 0; background-color: #e6e6e6;  font-family:Arial, sans-serif; ">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-radius: 10px;">
        <tr>
            <td align="center" bgcolor="" style=" ">
                <img src="https://s3.amazonaws.com/gupy5/production/companies/1226/career/2002/images/2020-08-24_15-31_mainImage.jpg" 
                    width="100%" height="230"  style="display: block;border-radius: 10px;" />
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 30px; border-radius: 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td width="260" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">

                                <h3>Olá {{$dados->nome}},</h3>

                                <h4>Cadastro realizado com Sucesso!</h4>
                                                
                                <h5>Nome: {{$dados->nome}}</h5>
                                <h5>Email: {{$dados->email}}</h5>
                                <h5>Telefone: {{$dados->telefone}}</h5>
                                <h5>Mensagem: {{$dados->mensagem}}</h5>

                                <h5>Arquivo em anexo</h5>

                                <br><br>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#fff" style="padding: 30px; border-radius: 10px; border:#1f4280 solid 1px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="left" width="75%" style="font-size:12px; color:#1f4280;">
                            <b> Copyright © 2020 Netshow.me</b> - Todos os direitos reservados.<br />
                            Este é um e-mail automático.
                        </td>
                        <td>
                            <a href="https://netshowme.gupy.io/">
                                <img src="https://images.gupy.io/unsafe/85x85/https://s3.amazonaws.com/gupy5/production/companies/1226/career/2002/images/2020-08-26_21-43_logo.jpg" alt="Site"
                                    width="100" height="75" style="display: block;" border="0" />
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br><br>
</body>

</html>
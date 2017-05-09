<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body style="padding: 0; margin: 0; font-family: Arial, Helvetica, sans-serif; line-height: 23px;">
		<table cellpadding="0" cellspacing="0" border="0" style="max-width: 600px; width: 100%; margin-left: auto; margin-right: auto; background: #fff; color: #5b5b5b;">
			<tr>
				<td align="center" style="padding-top: 10px; padding-bottom: 20px; padding-left: 20px; padding-right: 15px;">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td style="padding-top: 20px; padding-bottom: 20px; font-size: 16px;">Hi, <strong>{!! $model->name !!}</strong>!</td>
						</tr>
						<tr>
							<td style="padding-bottom: 20px; font-size: 15px;">Welcome to Wondervend!</td>
						</tr>
						<tr>
							<td style="padding-bottom: 20px; font-size: 15px;">You'll be able to login using the following credentials:</td>
						</tr>
						<tr>
							<td style="font-size: 15px;">Email: {!! $model->email !!}</td>
						</tr>
						<tr>
							<td style="padding-bottom: 20px; font-size: 15px;">Password: <strong>123456<strong></td>
						</tr>
						<tr>
							<td style="font-size: 15px;">It is advisable that you change your password after your first login.</td>
						</tr>
                        <tr>
                            <td style="padding-top: 20px; font-size: 15px;">Thank you,<br/>Wondervend Team</td>
                        </tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
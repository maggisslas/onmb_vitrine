<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    {{-- <base href="{!! asset('/assets').'/' !!}"> --}}
    <title></title>
    <style>
        /* @font-face {
            font-family: 'Cabin';
            src: url('./../Cabin-Font/Cabin-Regular.ttf')
        } */

        body {
            font-family: 'Arial', 'Cabin' , 'sans-serif' !important;
        }
        p, div, span, h1,h2,h3,h4,h5,h6,table, td{
            font-family: 'Arial', 'Cabin' , 'sans-serif' !important;
        }
    </style>
    @yield('style')
</head>
<body style="margin:0;padding:0;">
  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
      <td align="center" style="padding:0;">
        <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
          <tr>
            <td align="center" style="padding:20px 0 0 0;background:#fff;">
              <img src="{{ config('base.variables.logo_onmb') }}"
                    alt="ONMB"
                    style="height:auto;display:block; width:200px;" />
            </td>
          </tr>
          <tr>
            <td style="padding:30px 30px 42px 30px;">
              @yield('content')
            </td>
          </tr>
          <tr>
            <td style="padding:30px;background:#bc1f24;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                <tr>
                  <td style="padding:0;width:50%;" align="left">
                    <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                        &copy; {{ date('Y') }}  ONMB <br/>
                        <a href="https://ordremedecinsbenin.bj" style="color:#ffffff;text-decoration:underline;">ordremedecinsbenin.bj</a>
                    </p>
                  </td>
                  <td style="padding:0;width:50%;" align="right">
                    <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                      <tr>
                        <td style="padding:0 0 0 10px;width:38px;">
                            <a href="https://www.facebook.com/profile.php?id=100054628592039"
                                target="_blank"
                                style="color:#ffffff;">
                                <img src="{{ env('LOGO_FB') }}"
                                    alt="Facebook"
                                    width="38"
                                    style="height:auto;display:block;border:0;" />
                            </a>
                        </td>

                        {{-- <td style="padding:0 0 0 10px;width:38px;">
                            <a href="https://www.linkedin.com/company/105475541/admin/dashboard"
                                target="_blank"
                                style="color:#ffffff;">
                                <img src="{{ env('LOGO_IN') }}"
                                    alt="Facebook"
                                    width="38"
                                    style="height:auto;display:block;border:0;" />
                            </a>
                        </td> --}}

                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>

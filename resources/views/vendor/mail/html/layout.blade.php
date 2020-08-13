<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>

    <div class="wrapper" style="margin-left:19px;margin-right:19px;" cellpadding="0" cellspacing="0" role="presentation">
        
            
                <div class="content" style="width=100%" cellpadding="0" cellspacing="0" role="presentation">
                    {{ $header ?? '' }}

                    <!-- Email Body -->
                    
                        <div class="body"  width="100%" cellpadding="0" cellspacing="0">
                            <div class="inner-body" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                               
                                    
                                       {{ Illuminate\Mail\Markdown::parse($slot) }}
                                       <span style="color:black;font-weight:bold;font-size:16px;" class="content-cell">
                                        {{ $subcopy ?? '' }}
                                        </span>
                              
                            </div>
                            
                         </div>

                            {{ $footer ?? '' }}
                 </div>
           
    
    </div>
</body>
</html>

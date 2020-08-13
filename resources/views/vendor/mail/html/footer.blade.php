<tr>
    <td>
        <table class="footer"  cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td class="content-cell" >
                <div style="margin-bottom:10px; margin-top:4px">
               <a href="#"> <img style="width:50px" src="{{asset('img/FacebookIcone.png')}}"  alt="Facebook"> </a>
               <a href="#"> <img style="width:41px;" src="{{asset('img/InstagramLogo.png')}}" alt="Instagram"> </a>
               </div>
                {{ Illuminate\Mail\Markdown::parse($slot) }}
                
                </td>
            </tr>
            
        </table>
    </td>
</tr>

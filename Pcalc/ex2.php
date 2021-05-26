<html>
    <body>
        <h3>Vize ve Final Notlarının Ortalamasını Harf Notuna Çevirme</h3><br>
        <form method="POST" >
            <table >
                <tr>
                    <td>Vize Notu </td>
                    <td><input type="number" name="ex1"></td>
                </tr>
                <tr>
                    <td>Final Notu </td>
                    <td><input type="number" name="ex2"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Hesapla">
                    </td>
                    
                </tr>
            </table>
        <form>

        <hr>

        <?php
            $not1 = $_POST["ex1"];
            $not2 = $_POST["ex2"];
            
            $ortalama = (($not1*40)/100) + (($not2*60)/100);
        
            if($ortalama>=90 && $ortalama<=100){
                echo "Harf Notunuz : AA" ;
            }
            elseif($ortalama>=80&&$ortalama<=89){
                echo "Harf Notunuz : BA" ;
            }
            elseif($ortalama>=70&&$ortalama<=79){
                echo "Harf Notunuz : BB" ;
            }
            elseif($ortalama>=65&&$ortalama<=69){
                echo "Harf Notunuz : CB" ;
            }
            elseif($ortalama>=60&&$ortalama<=64){
                echo "Harf Notunuz : CC" ;
            }
            elseif($ortalama>=55&&$ortalama<=59){
                echo "Harf Notunuz : DC" ;
            }
            elseif($ortalama>=50&&$ortalama<=54){
                echo "Harf Notunuz : DD" ;
            }
            elseif($ortalama>=40&&$ortalama<=49){
                echo "Harf Notunuz : FD" ;
            }
            elseif($ortalama>=0&&$ortalama<=39){
                echo "Harf Notunuz : FF" ;
            }
            else{
                echo "Ortalama Hesaplanamadı Tekrar Deneyiniz";
            }
             
            
        ?>
    </body>
</html>
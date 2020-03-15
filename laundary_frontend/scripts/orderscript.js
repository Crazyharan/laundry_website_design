
function removebtn(i)
{
    
      $("#btn"+i+"").parents('tr').remove();
      total();
 

}

 function  myFunction(i)
    {   
        if(i===0) 
        {
        var qtya = $('#qty').val();
        
        const pre_price = document.getElementById('price0').getAttribute('data-price');
       
        var tot = qtya * pre_price;
        
        document.getElementById('sub0').innerText=tot;
        ide=document.createAttribute("data-sp");
        ide.value=tot;
        document.getElementById('sub'+i+'').setAttributeNode(ide);
        total();
        
        }
        else
        {
            var qtya = $('#qty'+i).val();
            
            const pre_price = document.getElementById('price'+i+'').getAttribute('data-price');
           
            var tot = qtya * pre_price;
           
            document.getElementById('sub'+i+'').innerText=tot; 
            ide=document.createAttribute("data-sp");
            ide.value=tot;
            document.getElementById('sub'+i+'').setAttributeNode(ide);
            total();
        }

    }


    function total()
    {
      var j = document.getElementById('mmm').childElementCount;
      var price_rs =[];
      
     for(var m=0;m<j;m++)
     {
       var pr =  document.getElementById("sub"+m).getAttribute('data-sp') == null  ?  0 : parseInt(document.getElementById("sub"+m).getAttribute('data-sp')) ;  
       price_rs.push(pr);        
     }
    
     
      var total= price_rs.reduce((a,b)=> a+b,0);
      document.getElementById('footertot').innerText=total;
      console.log(price_rs);
    }


    //   var tol =  document.getElementById('footertot').innerText;
    //   document.getElementById('sub0').innerText;
    //   var pre = a;
    //   var tot =;
    //   var final =  document.getElementById('footertot').innerText=pre;


    
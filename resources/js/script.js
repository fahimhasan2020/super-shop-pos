var sum = 0;
$('.varies').each(function(){
    sum += parseInt($(this).text());  // Or this.innerHTML, this.innerText
});
$('.totalPrice').text(sum);
$('#totalInput').val(sum);
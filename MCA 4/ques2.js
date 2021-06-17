$("div").on("click","button",function(event)
{
$(event.delegatetarget).css("background-color","red");
});

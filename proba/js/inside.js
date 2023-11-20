//<![CDATA[
var docClickLoader = new RemoteFileLoader('docClickLoader');
function loadInto(src, destId, evt)
{
 var ok = docClickLoader.loadInto(src.href || src.getAttribute('href'), destId);
 if (ok) cancelEvent(evt);
};
function toggleInto(src, destId, evt)
{
 var dest = document.getElementById(destId);
 if (!dest.contentLoaded)
 {
  var ok = docClickLoader.loadInto(src.href || src.getAttribute('href'), destId);
  if (ok) dest.contentLoaded = true;
 }
 cancelEvent(evt);
 if (!dest.toggleState)
 {
  src.innerHTML = 'Close: ' + src.innerHTML;
  dest.style.display = 'block';
  dest.toggleState = 1;
 }
 else
 {
  src.innerHTML = src.innerHTML.replace(/^Close: /, '');
  dest.style.display = 'none';
  dest.toggleState = 0;
 }
};

addEvent(document, 'click', function(evt)
{
 evt = evt || window.event;
 var src = evt.target || evt.srcElement;
 if (src.nodeType && src.nodeType != 1) src = src.parentNode;
 while (src)
 {
  var srcName = (src.nodeName||src.tagName||'').toLowerCase();
  if (srcName == 'a' && src.className && src.className.match(/^(load|toggle)into-(.+)$/))
  {
   if (RegExp.$1 == 'load') return loadInto(src, RegExp.$2, evt);
   if (RegExp.$1 == 'toggle') return toggleInto(src, RegExp.$2, evt);
  }
  src = src.parentNode;
 }
}, 1);
//]]>

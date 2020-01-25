<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
<select name="" id="selectid" onchange="myfun1(this.value)">
  <option value="one">one</option>
  <option value="two">two</option>
  <option value="three">theree</option>
</select>
  <script>
       function myfun1(value)
      {
        let params = new URLSearchParams(location.search)

        if(params.has('var')) {
          params.delete('var')
        }
        params.append('var', value)
        console.log(params.toString(), location.href)
        location.href = location.pathname+"?"+params.toString()
        // alert(value);
      }
  </script>
</body>
</html>
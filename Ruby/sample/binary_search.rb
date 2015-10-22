def chop(num, arr)
  left = 0
  mid = 0
  right = arr.last

  while left <= right do
   mid = (left + right) / 2
   if arr[mid] == num
     p mid
     exit
   elsif arr[mid] < num
     left = mid + 1
   else
     right = mid - 1
   end
  end
end


number_to_search = 4
arr = [1, 2, 3, 4]
chop(number_to_search, arr)

# module Average
#   def ave(num1, num2)
#     return (num1 + num2) / 2
#   end
# end
#
# class Test
#   include Average
#
#   def display(num1, num2)
#     result = ave(num1, num2)
#     puts "average value is #{result}"
#   end
# end
#
# test = Test.new
# test.display(43, 28)

module Value
  def maxValue(x, y)
    if x > y
      return x
    else
      return y
    end
  end

  module_function :maxValue
end

include Value

puts maxValue(32, 5)

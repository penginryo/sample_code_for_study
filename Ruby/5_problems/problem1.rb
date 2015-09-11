@list = [1, 2, 3].freeze

def func1(list)
	sum = 0
	list.each { |num|sum += num }
	sum
end

def func2(list)
	sum = 0
	while !list.empty?
		sum += list.shift
	end
	sum
end

def func3(list)
	return 0 if list.empty?
	list.shift + func3(list)
end

p func1(@list)
p func2(@list.dup)
p func3(@list.dup)
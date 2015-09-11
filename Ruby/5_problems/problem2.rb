@list1 = %w(1 2 3 4)
@list2 = %w(a b c D E F)

def merger(list1, list2)
	newList = []

	list1.each do |data|
		newList.push(data)
		newList.push(list2.shift)
	end

	unless list2.empty?
		list2.each do |data|
			newList.push(data)
		end
	end

	newList
end

p merger(@list1, @list2)
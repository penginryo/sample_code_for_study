def is_underscore?(letter)
	true if letter == "_"
end

def snake_to_camel(text)
	text_list = text.split(//)
	underscores = []

	for i in 0...text_list.length
		underscores.push(i) if is_underscore?(text_list[i])
	end

	if underscores.length == 0
		p "not snake case"
		exit
	end

	underscores.reverse_each do |underscore|
		text_list.delete_at(underscore)
		text_list[underscore].upcase! if text_list[underscore]
	end

	puts text_list.join
end

print "input a string in snake -> "
input = gets.chomp
snake_to_camel(input)
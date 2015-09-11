def is_capital?(letter)
	true if letter == letter.upcase
end

def cammel_to_snake(text)
	text_list = text.split(//)
	capitals = []

	text_list.each do |letter|
		capitals.push(letter) if is_capital?(letter)
	end

	if capitals.length == 0
		p "not cammel case"
		exit
	end

	capitals.each do |capital|
		index_of_insert = text_list.index(capital)
		text_list[index_of_insert].downcase!
		text_list.insert(index_of_insert, "_")
	end

	puts text_list.join
end

print "input a string in cammelcase -> "
input = gets.chomp
cammel_to_snake(input)
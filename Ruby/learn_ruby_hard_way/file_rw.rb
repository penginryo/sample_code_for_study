fileName = ARGV.first

puts "Erase #{fileName}"
puts "If you don't mind, hit return"

$stdin.gets

puts "Opening the file..."
target = open(fileName, 'w')

puts "Truncation the file."
target.truncate(0)

print "line 1: "
line1 = $stdin.gets.chomp
print "line 2: "
line2 = $stdin.gets.chomp
print "line 3: "
line3 = $stdin.gets.chomp

puts "I'm going to write these to the file."

target.write(line1)
target.write("\n")
target.write(line2)
target.write("\n")
target.write(line3)
target.write("\n")

puts "Close file."
target.close
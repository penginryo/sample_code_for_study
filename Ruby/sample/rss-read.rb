require 'rss'
require 'open-uri'

url = 'http://feeds.feedburner.com/Mobilecrunch'
open(url) do |rss|
  feed = RSS::Parser.parse(rss)
  puts "Title: #{feed.channel.title}"
  feed.items.each do |item|
    puts "Item: #{item.title}"
    puts "URL: #{item.link}"
puts " "
    puts "---------------------------------------------------------------------"
    puts " "
  end
end
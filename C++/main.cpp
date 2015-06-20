#include <iostream>
#include <fstream>
#include <string>
#include <stack>

using namespace std;

class ErrorFinderForHTML{
private:
    ifstream input;
    stack<string> _stack;
public:
    ErrorFinderForHTML(string filepath){
        input.open(filepath);
        if(input.fail()){
            cout << "Itput file couldn't be opened" << endl;
            exit(0);
        }
    }
    ~ErrorFinderForHTML(){
        input.close();
    }

    string tagFinder(){      // li   /li
        char current_char;
        int placeOfOpeningTag;
        string tagName = "";

        while((current_char = input.get()) != '<') {}
            //having < at this point
        while ((current_char = input.get()) != '>') {
            if (current_char == ' ') break;
            tagName += current_char;
        }
        cout << tagName << endl;
        return tagName;
        tagName = "";
    }

    int stackMan(){
        string tagName = tagFinder();

        if(tagName[0] == '/') {  // if CLOSING TAG
            tagName.erase(tagName.begin());
            if ((_stack.top()) == tagName) {    // check if top of stack is the same as input
            _stack.pop();
            } else {
                cout << "Your html file has tag error" << endl;
                exit(0);
            }
        } else {                // if OPENING TAG
            _stack.push(tagName);
        }

        cout << "size -> " << _stack.size() << endl << endl;

        if(_stack.size() == 0){
            return 0;
        } else {
            return 1;
        }
    }

};
int main() {
    ErrorFinderForHTML input("/Users/penginryo/ClionProjects/cpp_stack/test.html");

    int end = -1;
    end = input.stackMan();

    while(end != 0){
        end = input.stackMan();
    }

    cout << "Stack cleared, successfully finished" << endl;

    return 0;
}